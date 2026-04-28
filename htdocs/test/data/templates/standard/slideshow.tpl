
<div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
{foreach $slides as $slide}
    <div class="carousel-item" data-interval="5000"><img src="{#mediaUrl#}/slides/{$slide->getImage()}" alt="{$slide->getDescription()}" class="d-block w-100"></div>
{/foreach}
</div>
</div>
<script>
    $('.carousel-inner .carousel-item:first').addClass('active');
</script> 
{literal}
<!--
<script type="text/javascript">
    $(function(){
        $("#slides").slidesjs({
            width: 700,
            height: 397,
            navigation: {active: false},
            pagination: {active: false},
            play: {active: false, auto: true, interval: 3000, effect: 'fade'},
            effect: {
                fade: {speed: 1000, crossfade: true}
            }
        });
    });
</script>
-->
{/literal}
