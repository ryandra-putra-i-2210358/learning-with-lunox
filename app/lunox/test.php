<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Lunox Ultimate Simulator</title>
  <style>
    body {
      font-family: sans-serif;
      text-align: center;
      margin-top: 20px;
      background-color: #1a1a1a;
      color: white;
      transition: background-color 0.3s ease;
    }

    .flash {
      animation: flash 0.3s ease;
    }

    @keyframes flash {
      0% { background-color: #ffd700; }
      100% { background-color: #1a1a1a; }
    }

    .button {
      padding: 10px 20px;
      margin: 10px;
      font-size: 18px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
    }

    .chaos { background-color: purple; }
    .order { background-color: gold; color: black; }

    #mode { font-size: 24px; margin-bottom: 10px; }

    #log {
      margin-top: 20px;
      background: #333;
      padding: 15px;
      border-radius: 10px;
      width: 60%;
      margin-left: auto;
      margin-right: auto;
      text-align: left;
      max-height: 250px;
      overflow-y: auto;
    }

    canvas {
      margin-top: 20px;
      background: #111;
      border: 2px solid #555;
    }
  </style>
</head>
<body>

  <h1>Lunox Ultimate Simulator</h1>
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

  <canvas id="canvas" width="300" height="150"></canvas>

  <!-- Suara -->
  <audio id="chaosSound" src="https://cdn.pixabay.com/audio/2022/03/24/audio_52a1b7b670.mp3"></audio>
  <audio id="orderSound" src="https://cdn.pixabay.com/audio/2022/03/15/audio_72cd1e1f3e.mp3"></audio>
  <audio id="healSound" src="https://cdn.pixabay.com/audio/2022/03/15/audio_2fa1de7cf3.mp3"></audio>

  <script>
    const state = {
      mode: 'chaos',
      hp: 100,
      mana: 100,
    };

    const canvas = document.getElementById('canvas');
    const ctx = canvas.getContext('2d');
    const modeEl = document.getElementById('mode');
    const hpEl = document.getElementById('hp');
    const manaEl = document.getElementById('mana');
    const logEl = document.getElementById('log');

    const chaosSound = document.getElementById('chaosSound');
    const orderSound = document.getElementById('orderSound');
    const healSound = document.getElementById('healSound');

    function updateUI() {
      modeEl.innerHTML = `Mode: <span style="color:${state.mode === 'chaos' ? 'purple' : 'gold'};">${state.mode.charAt(0).toUpperCase() + state.mode.slice(1)}</span>`;
      hpEl.textContent = state.hp;
      manaEl.textContent = state.mana;
    }

    function log(text) {
      logEl.innerHTML = `<p>> ${text}</p>` + logEl.innerHTML;
    }

    function flashEffect() {
      document.body.classList.add("flash");
      setTimeout(() => document.body.classList.remove("flash"), 300);
    }

    function drawEffect(color, shape = "circle") {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      ctx.fillStyle = color;
      if (shape === "circle") {
        ctx.beginPath();
        ctx.arc(150, 75, 30, 0, Math.PI * 2);
        ctx.fill();
      } else if (shape === "beam") {
        ctx.fillRect(120, 60, 60, 30);
      }
      setTimeout(() => ctx.clearRect(0, 0, canvas.width, canvas.height), 400);
    }

    function switchToChaos() {
      state.mode = 'chaos';
      chaosSound.play();
      log("Switched to 🔮 Chaos Mode!");
      updateUI();
    }

    function switchToOrder() {
      state.mode = 'order';
      orderSound.play();
      log("Switched to 🟡 Order Mode!");
      updateUI();
    }

    function useSkill1() {
      flashEffect();
      if (state.mode === 'chaos') {
        log("🌀 Chaos Beam! Deals 50 damage.");
        drawEffect("purple", "beam");
        chaosSound.play();
      } else {
        log("💛 Order Heal! Healed 30 HP.");
        state.hp = Math.min(state.hp + 30, 100);
        drawEffect("gold", "circle");
        healSound.play();
      }
      updateUI();
    }

    function useSkill2() {
      flashEffect();
      if (state.mode === 'chaos') {
        log("🔁 Dark Pulse! Deals 3x20 damage.");
        drawEffect("magenta", "beam");
        chaosSound.play();
      } else {
        log("🛡️ Light Barrier! Immune for 2s.");
        drawEffect("yellow", "circle");
        orderSound.play();
      }
    }

    updateUI();
  </script>
</body>
</html>
