

@extends('layouts.app')

@section('content')
<script>
$('#mainBody').first('div').css('background','rgba(0,0,0,0.9)')
$('#mainBody').find('img').first().remove();
</script>

<div class="uk-child-width-expand@m" uk-grid>
    <div>
        <div class="uk-card uk-card-secondary" style="background: transparent !important">
            <div class="uk-card-media-top uk-child-width-1-3@s uk-text-center uk-padding-large uk-padding-remove-bottom">
                <img class="animate__animated animate__rotateIn" src="https://airleagueband.com/images/LogoInverse@2x.png" alt="">
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">Media Top</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
        </div>
    </div>

<style>

:root {
  --animate-delay: 0.5s;
}

</style>
<!-- Drummer -->


@endsection
