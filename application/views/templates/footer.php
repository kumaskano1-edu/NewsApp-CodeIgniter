<?php if (strstr(base_url(),'teamcalendar.ai')) : ?>

<!-- Start of teamcalendarai Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=bfaefa3d-34e6-4e38-b097-a357714d19fa"> </script>
<!-- End of teamcalendarai Zendesk Widget script -->
<script>
if (location.protocol != 'https:') {
  location.href = 'https:' + window.location.href.substring(window.location.protocol.length);
}
</script>
<?php endif; ?>

<script>
  $(document).ready(function(){
    $("#menu-toggle").click(function(e){
      e.preventDefault();
      $("#wrapper").toggleClass("menuDisplayed");
      $("#showicon").addClass("stdcolor");
      $("#menu-toggle").toggleClass("d-none");
    });

    $("#showicon").click(function(e){
      e.preventDefault();
      $("#wrapper").toggleClass("menuDisplayed");
      $("#showicon").removeClass("stdcolor");
      $("#menu-toggle").toggleClass("d-none");
    });

  });
</script>
<style>
body{
  background-color:#fff;
}
  </style>

</body>
</html>