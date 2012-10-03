<button id="displayButton" class="btn btn-primary centered"  onclick="loadRenderer()">Load 3D Model Viewer<br/>(<?= Utility::filesizeFormat($file->get('size'))?>)</button>
<div id="renderArea" style="width: <?=$width?>; height: <?=$height?>;"></div>

<script src="/thingiview/Three.js"></script>
<script src="/thingiview/plane.js"></script>
<script src="/thingiview/thingiview.js"></script>
<script>
  function loadRenderer()
  {
    $('#displayButton').hide();
    $('#renderArea').show();

    thingiurlbase = "/thingiview";
    thingiview = new Thingiview("renderArea");
    thingiview.setObjectColor('#C0D8F0');
    thingiview.initScene();
    thingiview.loadSTL("/passthru:<?=$file->id?>");
  }
</script>