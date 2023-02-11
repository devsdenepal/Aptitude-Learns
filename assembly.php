<script crossorigin src="https://unpkg.com/@daily-co/daily-js"></script>
<script>
  function createFrameAndJoinRoom() {
    window.callFrame = window.DailyIframe.createFrame();
    callFrame.join({ url: 'Assembly'});
  }
</script>
