

@extends('layouts.app')

@section('content')
<style>

:root {
  --animate-delay: 0.5s;
}

</style>
<!-- Drummer -->
<div class="uk-card uk-card-secondary uk-grid-collapse uk-child-width-expand@s uk-margin-remove animate__animated animate__backInLeft animate__slow" uk-grid>
    <div class="uk-card-media-left uk-cover-container">
        <img sizes="(max-width: 1400px) 100vw, 1400px"  srcset="
/images/BGOpt/yutonghu1_qpbaif_c_scale,w_200.jpg 200w,
/images/BGOpt/yutonghu1_qpbaif_c_scale,w_363.jpg 363w,
/images/BGOpt/yutonghu1_qpbaif_c_scale,w_489.jpg 489w,
/images/BGOpt/yutonghu1_qpbaif_c_scale,w_600.jpg 600w,
/images/BGOpt/yutonghu1_qpbaif_c_scale,w_697.jpg 697w,
/images/BGOpt/yutonghu1_qpbaif_c_scale,w_790.jpg 790w,
/images/BGOpt/yutonghu1_qpbaif_c_scale,w_880.jpg 880w,
/images/BGOpt/yutonghu1_qpbaif_c_scale,w_957.jpg 957w,
/images/BGOpt/yutonghu1_qpbaif_c_scale,w_1029.jpg 1029w,
/images/BGOpt/yutonghu1_qpbaif_c_scale,w_1110.jpg 1110w,
/images/BGOpt/yutonghu1_qpbaif_c_scale,w_1185.jpg 1185w,
/images/BGOpt/yutonghu1_qpbaif_c_scale,w_1257.jpg 1257w,
/images/BGOpt/yutonghu1_qpbaif_c_scale,w_1318.jpg 1318w,
/images/BGOpt/yutonghu1_qpbaif_c_scale,w_1386.jpg 1386w,
/images/BGOpt/yutonghu1_qpbaif_c_scale,w_1398.jpg 1398w,
/images/BGOpt/yutonghu1_qpbaif_c_scale,w_1400.jpg 1400w" src="/images/BGOpt/yutonghu1_qpbaif_c_scale,w_1400.jpg" alt="" uk-cover>
        <canvas width="600" height="400"></canvas>
    </div>
    <div>
        <div class="uk-card-body">
            <h3 class="uk-card-title">{{__('about.drummerName')}}</h3>
            <p>{!! nl2br(__('about.drummerDescription')) !!}</p>
        </div>
    </div>
</div>

<!-- Singer -->
<div class="uk-card uk-card-secondary uk-grid-collapse uk-child-width-1-2@s uk-margin-remove animate__animated animate__backInRight animate__slow animate__delay-2s" uk-grid>
    <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
        <img sizes="(max-width: 1400px) 100vw, 1400px"  srcset="
/images/BGOpt/hongjietian2_p6zk6g_c_scale,w_200.jpg 200w,
/images/BGOpt/hongjietian2_p6zk6g_c_scale,w_464.jpg 464w,
/images/BGOpt/hongjietian2_p6zk6g_c_scale,w_650.jpg 650w,
/images/BGOpt/hongjietian2_p6zk6g_c_scale,w_820.jpg 820w,
/images/BGOpt/hongjietian2_p6zk6g_c_scale,w_948.jpg 948w,
/images/BGOpt/hongjietian2_p6zk6g_c_scale,w_1062.jpg 1062w,
/images/BGOpt/hongjietian2_p6zk6g_c_scale,w_1169.jpg 1169w,
/images/BGOpt/hongjietian2_p6zk6g_c_scale,w_1271.jpg 1271w,
/images/BGOpt/hongjietian2_p6zk6g_c_scale,w_1359.jpg 1359w,
/images/BGOpt/hongjietian2_p6zk6g_c_scale,w_1400.jpg 1400w" src="/images/BGOpt/hongjietian2_p6zk6g_c_scale,w_1400.jpg" alt="" uk-cover>
        <canvas width="600" height="400"></canvas>
    </div>
    <div>
        <div class="uk-card-body">
            <h3 class="uk-card-title">{{__('about.singerName')}}</h3>
            <p>{!! nl2br(__('about.singerDescription')) !!}</p>
        </div>
    </div>
</div>

<!-- Rapper -->
<div class="uk-card uk-card-secondary uk-grid-collapse uk-child-width-expand@s uk-margin-remove  animate__animated animate__backInLeft animate__slow animate__delay-3s" uk-grid>
    <div class="uk-card-media-left uk-cover-container">
        <img sizes="(max-width: 1400px) 100vw, 1400px"  srcset="
/images/BGOpt/kezhao3_oal6ec_c_scale,w_200.jpg 200w,
/images/BGOpt/kezhao3_oal6ec_c_scale,w_452.jpg 452w,
/images/BGOpt/kezhao3_oal6ec_c_scale,w_627.jpg 627w,
/images/BGOpt/kezhao3_oal6ec_c_scale,w_793.jpg 793w,
/images/BGOpt/kezhao3_oal6ec_c_scale,w_918.jpg 918w,
/images/BGOpt/kezhao3_oal6ec_c_scale,w_1020.jpg 1020w,
/images/BGOpt/kezhao3_oal6ec_c_scale,w_1121.jpg 1121w,
/images/BGOpt/kezhao3_oal6ec_c_scale,w_1220.jpg 1220w,
/images/BGOpt/kezhao3_oal6ec_c_scale,w_1306.jpg 1306w,
/images/BGOpt/kezhao3_oal6ec_c_scale,w_1382.jpg 1382w,
/images/BGOpt/kezhao3_oal6ec_c_scale,w_1400.jpg 1400w" src="/images/BGOpt/kezhao3_oal6ec_c_scale,w_1400.jpg" alt="" uk-cover>
        <canvas width="600" height="400"></canvas>
    </div>
    <div>
        <div class="uk-card-body">
            <h3 class="uk-card-title">{{__('about.rapperName')}}</h3>
            <p>{!! nl2br(__('about.rapperDescription')) !!}</p>
        </div>
    </div>
</div>

<!-- Piano -->
<div class="uk-card uk-card-secondary uk-grid-collapse uk-child-width-1-2@s uk-margin-remove  animate__animated animate__backInRight animate__slow animate__delay-4s" uk-grid>
    <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
        <img  sizes="(max-width: 1400px) 100vw, 1400px"  srcset="
/images/BGOpt/runqili4_xdo3dx_c_scale,w_200.jpg 200w,
/images/BGOpt/runqili4_xdo3dx_c_scale,w_418.jpg 418w,
/images/BGOpt/runqili4_xdo3dx_c_scale,w_577.jpg 577w,
/images/BGOpt/runqili4_xdo3dx_c_scale,w_719.jpg 719w,
/images/BGOpt/runqili4_xdo3dx_c_scale,w_835.jpg 835w,
/images/BGOpt/runqili4_xdo3dx_c_scale,w_940.jpg 940w,
/images/BGOpt/runqili4_xdo3dx_c_scale,w_1038.jpg 1038w,
/images/BGOpt/runqili4_xdo3dx_c_scale,w_1121.jpg 1121w,
/images/BGOpt/runqili4_xdo3dx_c_scale,w_1200.jpg 1200w,
/images/BGOpt/runqili4_xdo3dx_c_scale,w_1281.jpg 1281w,
/images/BGOpt/runqili4_xdo3dx_c_scale,w_1357.jpg 1357w,
/images/BGOpt/runqili4_xdo3dx_c_scale,w_1382.jpg 1382w,
/images/BGOpt/runqili4_xdo3dx_c_scale,w_1400.jpg 1400w" src="/images/BGOpt/runqili4_xdo3dx_c_scale,w_1400.jpg" alt="" uk-cover>
        <canvas width="600" height="400"></canvas>
    </div>
    <div>
        <div class="uk-card-body">
            <h3 class="uk-card-title">{{__('about.pianoName')}}</h3>
            <p>{!! nl2br(__('about.pianoDescription')) !!}</p>
        </div>
    </div>
</div>

<!-- Guitar -->

<div class="uk-card uk-card-secondary uk-grid-collapse uk-child-width-1-2@s uk-margin-remove  animate__animated animate__backInLeft animate__slow  animate__delay-5s" uk-grid>
    <div class="uk-card-media-left uk-cover-container">
        <img sizes="(max-width: 1400px) 100vw, 1400px" srcset="
/images/BGOpt/zhema5_cmxikz_c_scale,w_200.jpg 200w,
/images/BGOpt/zhema5_cmxikz_c_scale,w_447.jpg 447w,
/images/BGOpt/zhema5_cmxikz_c_scale,w_616.jpg 616w,
/images/BGOpt/zhema5_cmxikz_c_scale,w_770.jpg 770w,
/images/BGOpt/zhema5_cmxikz_c_scale,w_892.jpg 892w,
/images/BGOpt/zhema5_cmxikz_c_scale,w_995.jpg 995w,
/images/BGOpt/zhema5_cmxikz_c_scale,w_1089.jpg 1089w,
/images/BGOpt/zhema5_cmxikz_c_scale,w_1179.jpg 1179w,
/images/BGOpt/zhema5_cmxikz_c_scale,w_1264.jpg 1264w,
/images/BGOpt/zhema5_cmxikz_c_scale,w_1338.jpg 1338w,
/images/BGOpt/zhema5_cmxikz_c_scale,w_1398.jpg 1398w,
/images/BGOpt/zhema5_cmxikz_c_scale,w_1400.jpg 1400w" src="/images/BGOpt/zhema5_cmxikz_c_scale,w_1400.jpg" alt="" uk-cover>
        <canvas width="600" height="400"></canvas>
    </div>
    <div>
        <div class="uk-card-body">
            <h3 class="uk-card-title">{{__('about.guitarName')}}</h3>
            <p>{!! nl2br(__('about.guitarDescription')) !!}</p>
        </div>
    </div>
</div>
<script>
$('#mainBody').first('div').css('background','rgba(0,0,0,0.9)')
</script>
@endsection
