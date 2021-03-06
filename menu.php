<?php
// echo "session:<br/>\n";
// var_dump($_SESSION);
$pers = $_SESSION['pers'];
$permissions = array();
foreach($pers as $p){
  $tmp = explode('|',$p);
  if(!isset($permissions[$tmp[0]])){
    $permissions[$tmp[0]] = array();
  }
  $permissions[$tmp[0]][$tmp[1]] = TRUE;
}
?>
<div class="sidebar">
  <nav class="sidebar-nav">
    <ul class="nav">
      <?php if(isset($permissions['selected_base']) || $is_admin){ ?>
      <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i>
          تغییر مبنای
        </a>
        <ul class="nav-dropdown-items">
          <?php if(isset($permissions['selected_base']['sh_mantaghe']) || $is_admin){ ?>
          <li class="nav-item">
            <a class="nav-link" href="?selected_base=sh_mantaghe">مناطق سیزده گانه شهرداری</a>
          </li>
          <?php }if(isset($permissions['selected_base']['mantaghe']) || $is_admin){ ?>        
          <li class="nav-item">
            <a class="nav-link" href="?selected_base=manategh">  نواحی شهرداری</a>
          </li>
          <?php }if(isset($permissions['selected_base']['nahiye']) || $is_admin){ ?>
          <li class="nav-item">
            <a class="nav-link" href="?selected_base=nahiye">نواحی  ترافیکی</a>
          </li>
          <?php } ?>
        </ul>
      </li>
      <?php } if(isset($permissions['stat']) || $is_admin){ ?>
      <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i>
        گزارشات آماری
        </a>
        <ul class="nav-dropdown-items">
          <?php if(isset($permissions['stat']['job']) || $is_admin){ ?>
          <li class="nav-item nav-dropdown">
            <!--                     <a class="nav-link nav-dropdown-toggle" href="?report=stat&variable=job&value=0"><i class="icon-puzzle"></i> پراکندگی مشاغل </a> -->
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> پراکندگی مشاغل </a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="?report=stat&variable=job&value=1"><i class="icon-puzzle"></i> کارمند</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?report=stat&variable=job&value=2"><i class="icon-puzzle"></i> شغل آزاد</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?report=stat&variable=job&value=3"><i class="icon-puzzle"></i> دانشجو</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?report=stat&variable=job&value=4"><i class="icon-puzzle"></i> دانش آموز</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?report=stat&variable=job&value=5"><i class="icon-puzzle"></i> خانه دار</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?report=stat&variable=job&value=6"><i class="icon-puzzle"></i>بازنشسته / بیکار</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?report=stat&variable=job&value=7"><i class="icon-puzzle"></i> مغازه دار یا فروشنده</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?report=stat&variable=job&value=8"><i class="icon-puzzle"></i>استاد،فرهنگی،روحانی</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?report=stat&variable=job&value=9"><i class="icon-puzzle"></i> پزشک/پرستار</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?report=stat&variable=job&value=10"><i class="icon-puzzle"></i> راننده-مسافرکش</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?report=stat&variable=job&value=11"><i class="icon-puzzle"></i> کارگر/استادکار</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?report=stat&variable=job&value=12"><i class="icon-puzzle"></i> کارمنددولتی/خصوصی</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?report=stat&variable=job&value=13"><i class="icon-puzzle"></i> نظامی</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?report=stat&variable=job&value=14"><i class="icon-puzzle"></i> کشاورز</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?report=stat&variable=job&value=15"><i class="icon-puzzle"></i>خردسال</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?report=stat&variable=job&value=16"><i class="icon-puzzle"></i>سایر</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?report=stat&variable=job&value=0"><i class="icon-puzzle"></i> همه</a>
              </li>
            </ul>
          </li>
          <?php }if(isset($permissions['stat']['gender']) || $is_admin){ ?>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> پراکندگی جنسیت </a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="?report=stat&variable=GENDER&value=m"><i class="icon-puzzle"></i> مرد</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?report=stat&variable=GENDER&value=f"><i class="icon-puzzle"></i> زن </a>
              </li>
            </ul>
          </li>
          <?php }if(isset($permissions['stat']['use_car']) || $is_admin){ ?>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> مالکیت خودرو </a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="?report=stat&variable=use_car&value=1"><i class="icon-puzzle"></i> دارندگان</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?report=stat&variable=use_car&value=0"><i class="icon-puzzle"></i> فاقد خودرو </a>
              </li>
            </ul>
          </li>
          <?php }if(isset($permissions['stat']['location']) || $is_admin){ ?>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> مکان ها </a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="?report=location&variable=shape_sch1&">محل تحصیل</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?report=location&variable=shape_sch2&">محل آموزشگاه</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?report=location&variable=shape_wrk1&">محل اشتغال</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?report=location&variable=shape_shp1&">محل فروشگاه</a>
              </li>
            </ul>
          </li>
          <?php }if(isset($permissions['stat']['mobile_app']) || $is_admin){ ?>
          <li class="nav-item">
            <a class="nav-link" href="?report=mobile_app&">مسیریابی با موبایل</a>
          </li>
          <?php }if(isset($permissions['stat']['sarparast']) || $is_admin){ ?>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> سرپرست </a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="?report=stat&variable=sarparast&value=1"><i class="icon-puzzle"></i> می باشد</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?report=stat&variable=sarparast&value=0"><i class="icon-puzzle"></i>نمی باشد</a>
              </li>
            </ul>
          </li>
          <?php } ?>
        </ul>
      </li>
      <?php }if(isset($permissions['tolidjazb']) || $is_admin){ ?>
      <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i>
        گزارشات تولید و جذب
        </a>
        <ul class="nav-dropdown-items">
          <?php if(isset($permissions['tolidjazb']['tolid']) || $is_admin){ ?>
          <li class="nav-item">
            <a class="nav-link" href="javascript:loadTolid()">گزارش تولید</a>
          </li>
          <?php }if(isset($permissions['tolidjazb']['jazb']) || $is_admin){ ?>
          <li class="nav-item">
            <a class="nav-link" href="javascript:loadJazb()">گزارش جذب</a>
          </li>
          <?php }if(isset($permissions['tolidjazb']['od']) || $is_admin){ ?>
          <li class="nav-item">
            <a class="nav-link" href="od.php" target="_blank">ماتریس OD</a>
          </li>
          <?php } ?>
        </ul>
      </li>
      <?php }if(isset($permissions['mode']) || $is_admin){ ?>
      <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i>
        گزارشات مود سفر
        </a>
        <ul class="nav-dropdown-items">
          <?php if(isset($permissions['mode']['goal']) || $is_admin){ ?>
          <li class="nav-item">
            <a class="nav-link" href="mode.php" target="_blank">هدف سفر</a>
          </li>
          <?php }if(isset($permissions['mode']['mode']) || $is_admin){ ?>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> مود </a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="?report=mode&rep_mode=1"><i class="icon-puzzle"></i> پیاده</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?report=mode&rep_mode=2"><i class="icon-puzzle"></i>دوچرخه</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?report=mode&rep_mode=7"><i class="icon-puzzle"></i> موتور</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?report=mode&rep_mode=3"><i class="icon-puzzle"></i>خودرو</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?report=mode&rep_mode=8"><i class="icon-puzzle"></i>تاکسی</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?report=mode&rep_mode=21"><i class="icon-puzzle"></i>مسافرکش</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?report=mode&rep_mode=9"><i class="icon-puzzle"></i>وانت</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?report=mode&rep_mode=4"><i class="icon-puzzle"></i> اتوبوس واحد</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?report=mode&rep_mode=22"><i class="icon-puzzle"></i> اتوبوس غیرواحد</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?report=mode&rep_mode=23"><i class="icon-puzzle"></i>مینی بوس</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?report=mode&rep_mode=5"><i class="icon-puzzle"></i>مترو</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?report=mode&rep_mode=24"><i class="icon-puzzle"></i>کامیون دومحور</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?report=mode&rep_mode=25"><i class="icon-puzzle"></i>کامیون سه محور</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?report=mode&rep_mode=26"><i class="icon-puzzle"></i>تریلی</a>
              </li>
            </ul>
          </li>
          <?php } ?>
        </ul>
      </li>
      <?php } ?>
    </ul>
  </nav>
</div>