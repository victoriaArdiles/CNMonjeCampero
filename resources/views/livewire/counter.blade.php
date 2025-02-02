<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<div>
    <div class="movie-container">
        <label> Select a movie:</label>
        <select id="movie">
          <option value="220">Godzilla vs Kong (RS.220)</option>
          <option value="320">Radhe (RS.320)</option>
          <option value="250">RRR (RS.250)</option>
          <option value="260">F9 (RS.260)</option>
        </select>
      </div>
  
      <ul class="showcase">
        <li>
          <div class="seat"></div>
          <small>Available</small>
        </li>
        <li>
          <div class="seat selected"></div>
          <small>Selected</small>
        </li>
        <li>
          <div class="seat sold"></div>
          <small>Sold</small>
        </li>
      </ul>
      <div class="container">
        <div class="screen"></div>
  
        <div class="row">
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
        </div>
  
        <div class="row">
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat sold"></div>
          <div class="seat sold"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
        </div>
        <div class="row">
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat sold"></div>
          <div class="seat sold"></div>
        </div>
        <div class="row">
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
        </div>
        <div class="row">
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat sold"></div>
          <div class="seat sold"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
        </div>
        <div class="row">
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat"></div>
          <div class="seat sold"></div>
          <div class="seat sold"></div>
          <div class="seat sold"></div>
          <div class="seat"></div>
        </div>
      </div>
  
      <p class="text">
        You have selected <span id="count">0</span> seat for a price of RS.<span
          id="total"
          >0</span
        >
      </p>
</div>
<script src="{{ asset('js/script.js') }}"></script>
