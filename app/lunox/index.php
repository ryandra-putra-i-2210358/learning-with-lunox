<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Lunox Simulator</title>
  <style>
    body {
      font-family: sans-serif;
      text-align: center;
      margin-top: 50px;
      background-color: #1a1a1a;
      color: white;
    }

    #mode {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .button {
      padding: 10px 20px;
      margin: 10px;
      font-size: 18px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
    }

    .chaos {
      background-color: purple;
    }

    .order {
      background-color: gold;
      color: black;
    }

    #log {
      margin-top: 30px;
      background: #333;
      padding: 15px;
      border-radius: 10px;
      width: 60%;
      margin-left: auto;
      margin-right: auto;
      text-align: left;
    }
  </style>
</head>
<body>

  <h1>Lunox Mode Simulator</h1>
  <div id="mode">Mode: <span style="color:purple;">Chaos</span></div>
  <div>HP: <span id="hp">100</span> | Mana: <span id="mana">100</span></div>

  <div>
    <button class="button chaos" onclick="switchToChaos()">Switch to Chaos</button>
    <button class="button order" onclick="switchToOrder()">Switch to Order</button>
  </div>

  <div>
    <button class="button chaos" onclick="useSkill1()">Skill 1</button>
    <button class="button order" onclick="useSkill2()">Skill 2</button>
  </div>

  <div id="log"></div>

  <script>
    const state = {
      mode: 'chaos',
      hp: 100,
      mana: 100,
    };

    const logEl = document.getElementById('log');
    const modeEl = document.getElementById('mode');
    const hpEl = document.getElementById('hp');
    const manaEl = document.getElementById('mana');

    function updateUI() {
      modeEl.innerHTML = `Mode: <span style="color:${state.mode === 'chaos' ? 'purple' : 'gold'};">${state.mode.charAt(0).toUpperCase() + state.mode.slice(1)}</span>`;
      hpEl.textContent = state.hp;
      manaEl.textContent = state.mana;
    }

    function log(text) {
      logEl.innerHTML = `<p>> ${text}</p>` + logEl.innerHTML;
    }

    function switchToChaos() {
      state.mode = 'chaos';
      log("Switched to 🔮 Chaos Mode!");
      updateUI();
    }

    function switchToOrder() {
      state.mode = 'order';
      log("Switched to 🟡 Order Mode!");
      updateUI();
    }

    function useSkill1() {
      if (state.mode === 'chaos') {
        log("Used 🌀 Chaos Beam! Deals 50 damage.");
      } else {
        log("Used 💛 Order Heal! Healed 30 HP.");
        state.hp = Math.min(state.hp + 30, 100);
      }
      updateUI();
    }

    function useSkill2() {
      if (state.mode === 'chaos') {
        log("Used 🔁 Dark Pulse! Deals 3x20 damage.");
      } else {
        log("Used 🛡️ Light Barrier! Immune for 2 seconds.");
      }
    }

    updateUI();
  </script>

</body>
</html>
