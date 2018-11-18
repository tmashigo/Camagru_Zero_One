<?php
  session_start();
  if ($_SESSION[Username] && !empty($_SESSION[Username])) {
      include_once 'header.php';
  } else {
    header('Location: index.php?err=You must login to access this page.');
  }
?>
<script src="script/webcam.js" charset="utf-8"></script>
<title>Camagru - Montage</title>
  <article class="main">
    <div class="videobox">
      <h3>Online Rolling</h3>
        <video id="video"></video>
        <img id="image" height="640px" width="480px" style="display: none;"/>
        <div id="canvasvideo"></div>
      <form id="img_filter">
      <label for="flowercrown">
          <input type="radio" name="img_filter" value="images/filters/flowercrown.png" id="flowercrown" onchange="show_img('flowercrown')">
          <img class="img" src="images/filters/flowercrown.png" height="128" width="128">
        </label>
        <label for="pict1">
          <input type="radio" name="img_filter" value="images/filters/pict1.png" id="pict1" onchange="show_img('pict1')">
          <img class="img" src="images/filters/pict1.png" height="128" width="128">
        </label>
        <label for="pict2">
          <input type="radio" name="img_filter" value="images/filters/pict2.png" id="pict2" onchange="show_img('pict2')">
          <img class="img" src="images/filters/pict2.png" height="128" width="128">
        </label>
        <label for="pict3">
          <input type="radio" name="img_filter" value="images/filters/pict3.png" id="pict3" onchange="show_img('pict3')">
          <img class="img" src="images/filters/pict3.png" height="128" width="128">
        </label>
        <label for="pict4">
          <input type="radio" name="img_filter" value="images/filters/pict4.png" id="pict4" onchange="show_img('pict4')">
          <img class="img" src="images/filters/pict4.png" height="128" width="128">
        </label>
        <label for="pict8">
          <input type="radio" name="img_filter" value="images/filters/pict8.png" id="pict8" onchange="show_img('pict8')">
          <img class="img" src="images/filters/pict8.png" height="128" width="128">
        </label>
        <label for="pict9">
          <input type="radio" name="img_filter" value="images/filters/pict9.png" id="pict9" onchange="show_img('pict9')">
          <img class="img" src="images/filters/pict9.png" height="128" width="128">
        </label>
        <label for="pict10">
          <input type="radio" name="img_filter" value="images/filters/pict10.png" id="pict10" onchange="show_img('pict11')">
          <img class="img" src="images/filters/pict10.png" height="128" width="128">
        </label>
        <label for="pict11">
          <input type="radio" name="img_filter" value="images/filters/pict11.png" id="pict11" oncsshange="show_img('pict11')">
          <img class="img" src="images/filters/pict11.png" height="128" width="128">
        </label>
        <label for="pict12">
          <input type="radio" name="img_filter" value="images/filters/pict12.png" id="pict12" onchange="show_img('pict12')">
          <img class="img" src="images/filters/pict12.png" height="128" width="128">
        </label>
      </form>
      <br/>
      <button class="button" id="snap" onclick="javascript:takeSnap()">Take Apicture</button>
      </br>
      <br/>
    <label>UPLOAD IMAGE</label><input type='file' accept="image/*" onchange="readURL(this);" />
    <br/>
    <img id="image" height="640px" width="480px" style="display: none;"/>
  </div>
  </article>

  <aside class="aside2">
    <div class="videobox">
    <h3>Pictures</h3>
    <div id="canvas"></div>
    <form method='post' accept-charset='utf-8' name='form'>
      <input name='img' id='img' type='hidden'/>
      <input name='user' id='user' type='hidden' value='<?=$_SESSION[Username];?>'/>
    </form>
  </div>
  </aside>
  <footer class="footer">
  </footer>
</div>
