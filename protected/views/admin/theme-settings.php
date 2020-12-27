<form class="uk-form uk-form-horizontal admin-settings-page forms" id="forms">
<?php echo CHtml::hiddenField('action','themeSettings')?>

<h2><?php echo t("Website Compression")?></h2>

<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("Enabled")?></label>  
  <?php 
 echo CHtml::checkBox('theme_compression',getOptionA('theme_compression')==2?true:false,array(
   'class'=>"icheck",
   'value'=>2
 ));
  ?> 
</div>
<p class="uk-text-muted"><?php echo t("this options will compress all your js and css and html for website fast loading")?></p>

<hr/>

<h2><?php echo t("Home page")?></h2>

<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("Web Site Logosu Gizlensin mi ?")?>?</label>
  <?php 
 echo CHtml::checkBox('theme_hide_logo',getOptionA('theme_hide_logo')==2?true:false,array(
   'class'=>"icheck",
   'value'=>2
 ));
  ?> 
</div>

<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("Nasıl Çalıştığı Bölümünü Gizle")?>?</label>
  <?php 
 echo CHtml::checkBox('theme_hide_how_works',getOptionA('theme_hide_how_works')==2?true:false,array(
   'class'=>"icheck",
   'value'=>2
 ));
  ?> 
</div>


<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("Öne çıkan restaurant bölümünü gizle")?>?</label>
  <?php 
 echo CHtml::checkBox('disabled_featured_merchant',getOptionA('disabled_featured_merchant')=="yes"?true:false,array(
   'class'=>"icheck",
   'value'=>"yes"
 ));
  ?> 
</div>

<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("Mutfağa göre gözat bölümünü gizle")?>?</label>
  <?php 
 echo CHtml::checkBox('theme_hide_cuisine',getOptionA('theme_hide_cuisine')==2?true:false,array(
   'class'=>"icheck",
   'value'=>2
 ));
  ?> 
</div>

<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("Abonelik bölümünü gizle")?>?</label>
  <?php 
 echo CHtml::checkBox('disabled_subscription',getOptionA('disabled_subscription')=="yes"?true:false,array(
   'class'=>"icheck",
   'value'=>"yes"
 ));
  ?> 
</div>

<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("Bize katıl bölümünü gizle")?>?</label>
  <?php 
 echo CHtml::checkBox('social_flag',getOptionA('social_flag')==1?true:false,array(
   'class'=>"icheck",
   'value'=>1
 ));
  ?> 
</div>

<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("Dil çubuğunu gizle")?>?</label>
  <?php 
 echo CHtml::checkBox('show_language',getOptionA('show_language')==1?true:false,array(
   'class'=>"icheck",
   'value'=>1
 ));
  ?> 
</div>

<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("Özel alt bilgi giriniz")?></label>
  <?php 
 echo CHtml::textArea('theme_custom_footer',getOptionA('theme_custom_footer'),array(
   'class'=>"big-text-area"
 ))
  ?> 
</div>

<hr/>

<h3><?php echo t("Gelişmiş arama seçenekleri")?></h3>


<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("Adrese göre arama devre dışı")?></label>
  <?php 
echo CHtml::checkBox('theme_search_merchant_address',getOptionA('theme_search_merchant_address')==2?true:false,array(
   'class'=>"icheck",
   'value'=>2
 ));
  ?> 
</div>

<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("Disabled search by restaurant name")?></label>  
  <?php 
echo CHtml::checkBox('theme_search_merchant_name',getOptionA('theme_search_merchant_name')==2?true:false,array(
   'class'=>"icheck",
   'value'=>2
 ));
  ?> 
</div>

<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("Sokak/cadde'ye göre arama devredışı")?></label>
  <?php 
echo CHtml::checkBox('theme_search_street_name',getOptionA('theme_search_street_name')==2?true:false,array(
   'class'=>"icheck",
   'value'=>2
 ));
  ?> 
</div>

<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("Mutfağa göre arama devredışı")?></label>
  <?php 
echo CHtml::checkBox('theme_search_cuisine',getOptionA('theme_search_cuisine')==2?true:false,array(
   'class'=>"icheck",
   'value'=>2
 ));
  ?> 
</div>

<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("Yemek adına göre arama devredışı")?></label>
  <?php 
echo CHtml::checkBox('theme_search_foodname',getOptionA('theme_search_foodname')==2?true:false,array(
   'class'=>"icheck",
   'value'=>2
 ));
  ?> 
</div>

<hr/>

<h3><?php echo t("Menu")?></h3>

<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("Üst Başlıklar")?></label>
<?php 
echo CHtml::dropDownList('theme_top_menu[]',(array)FunctionsV3::getTopMenuActivated(),array(
  'browse'=>t("Browse Restaurant"),
  'resto_signup'=>t("Restaurant Signup"),
  'contact'=>t("Contact"),
  'signup'=>t("Login & Signup")
),array(
  'class'=>"chosen uk-form-width-large",
  "multiple"=>"multiple"
));
?>
</div>

<hr/>

<h3><?php echo t("Alt bilgi Menüler")?></h3>

<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("Menüleri Gizle")?></label>
  <?php 
echo CHtml::checkBox('theme_hide_footer_section1',getOptionA('theme_hide_footer_section1')==2?true:false,array(
   'class'=>"icheck",
   'value'=>2
 ));
  ?> 
</div>

<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("Diğerleri bölümünü gizle")?></label>
  <?php 
echo CHtml::checkBox('theme_hide_footer_section2',getOptionA('theme_hide_footer_section2')==2?true:false,array(
   'class'=>"icheck",
   'value'=>2
 ));
  ?> 
</div>

<hr/>


<h3><?php echo t("Mobil Uygulama")?></h3>

<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("Mobil uygulama bölümü etkinleştirildi mi?")?>?</label>
  <?php 
 echo CHtml::checkBox('theme_show_app',getOptionA('theme_show_app')==2?true:false,array(
   'class'=>"icheck",
   'value'=>2
 ));
  ?> 
</div>


<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("Google Play Linki")?></label>
  <?php 
 echo CHtml::textField('theme_app_android',getOptionA('theme_app_android'),array(
   'class'=>"uk-form-width-large"
 ))
  ?> 
</div>

<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("App Store Linki")?></label>
  <?php 
 echo CHtml::textField('theme_app_ios',getOptionA('theme_app_ios'),array(
   'class'=>"uk-form-width-large"
 ))
  ?> 
</div>

<!--<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("Windows Phone Linki")?></label>
  <?php 
 echo CHtml::textField('theme_app_windows',getOptionA('theme_app_windows'),array(
   'class'=>"uk-form-width-large"
 ))
  ?> 
</div>-->
  
  <hr/>

<h3><?php echo t("Arama Sonuçları")?></h3>

<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("Tüm filtreleri daraltmayın mı?")?>?</label>
  <?php 
 echo CHtml::checkBox('theme_filter_colapse',getOptionA('theme_filter_colapse')==2?true:false,array(
   'class'=>"icheck",
   'value'=>2
 ));
  ?> 
</div>

<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("Haritaları Etkinleştir")?>?</label>
  <?php 
 echo CHtml::checkBox('enabled_search_map',getOptionA('enabled_search_map')=="yes"?true:false,array(
   'class'=>"icheck",
   'value'=>"yes"
 ));
  ?> 
</div>

<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("Listeleme Şekli")?>?</label>
  <?php 
  echo CHtml::dropDownList('theme_list_style',getOptionA('theme_list_style'),array(
     'gridview'=>t("Tablo Şeklinde"),
     'listview'=>t("Liste Şeklinde"),
  ));
  ?> 
</div>

<hr/>

<h3><?php echo t("Yemek Menüsü")?></h3>

<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("Menü daraltılsın mı")?>?</label>
  <?php 
 echo CHtml::checkBox('theme_menu_colapse',getOptionA('theme_menu_colapse')==2?true:false,array(
   'class'=>"icheck",
   'value'=>2
 ));
  ?> 
</div>

<hr/>

<h3><?php echo t("Restaurant menüsü")?></h3>

<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("Açılış Saaatleri Sekmesi Kapatılsın mı?")?></label>
  <?php 
 echo CHtml::checkBox('theme_hours_tab',getOptionA('theme_hours_tab')==2?true:false,array(
   'class'=>"icheck",
   'value'=>2
 ));
  ?> 
</div>

<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("İncelemeler Sekmesi kapatılsın mı")?></label>
  <?php 
 echo CHtml::checkBox('theme_reviews_tab',getOptionA('theme_reviews_tab')==2?true:false,array(
   'class'=>"icheck",
   'value'=>2
 ));
  ?> 
</div>

<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("Rezervasyonlar sekmesi kapatılsın mı")?></label>
  <?php 
 echo CHtml::checkBox('merchant_tbl_book_disabled',getOptionA('merchant_tbl_book_disabled')==2?true:false,array(
   'class'=>"icheck",
   'value'=>2
 ));
  ?> 
</div>

<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("Haritalar Sekmesi Kapatılsın mı ")?></label>
  <?php 
 echo CHtml::checkBox('theme_map_tab',getOptionA('theme_map_tab')==2?true:false,array(
   'class'=>"icheck",
   'value'=>2
 ));
  ?> 
</div>


<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("Galeriler Kısmı Kapatılsın mı")?></label>
  <?php 
 echo CHtml::checkBox('theme_photos_tab',getOptionA('theme_photos_tab')==2?true:false,array(
   'class'=>"icheck",
   'value'=>2
 ));
  ?> 
</div>

<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("Bilgiler Kısmı Kapatılsın mı")?></label>
  <?php 
 echo CHtml::checkBox('theme_info_tab',getOptionA('theme_info_tab')==2?true:false,array(
   'class'=>"icheck",
   'value'=>2
 ));
  ?> 
</div>

<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("Tanıtım Sekmesi Devredışı Bırakılsın mı")?></label>
  <?php 
 echo CHtml::checkBox('theme_promo_tab',getOptionA('theme_promo_tab')==2?true:false,array(
   'class'=>"icheck",
   'value'=>2
 ));
  ?> 
</div>

<hr/>

<h3><?php echo t("Çerez Kuralları")?></h3>

<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("Çerez Kurallarını Etkinleştir")?></label>
  <?php 
 echo CHtml::checkBox('cookie_law_enabled',getOptionA('cookie_law_enabled')==2?true:false,array(
   'class'=>"icheck",
   'value'=>2
 ));
  ?> 
</div>

<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("Çerezleri Kabul Edilen Butonun Adı Ne Olsun ?")?></label>
  <?php 
 echo CHtml::textField('cookie_accept_text',getOptionA('cookie_accept_text'),array(
   'class'=>"uk-form-width-large"
 ))
  ?> 
</div>

<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("Cookielerin olduğu butonun adı nedir")?></label>
  <?php 
 echo CHtml::textField('cookie_info_text',getOptionA('cookie_info_text'),array(
   'class'=>"uk-form-width-large"
 ))
  ?> 
</div>

<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("Çerezler İçin Gizlilik Mesajı Ne Olsun")?></label>
  <?php 
 echo CHtml::textArea('cookie_msg_text',getOptionA('cookie_msg_text'),array(
   'class'=>"uk-form-width-large"
 ))
  ?> 
</div>

<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("Çerezlerin olduğu bağlantı nedir ?")?></label>
  <?php 
 echo CHtml::textField('cookie_info_link',getOptionA('cookie_info_link'),array(
   'class'=>"uk-form-width-large"
 ))
  ?> 
</div>

<hr/>

<h3><?php echo t("Dil çubuğu nerde olsun")?></h3>


<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("Position")?></label>  
  <?php 
  echo CHtml::dropDownList('theme_lang_pos',
  getOptionA('theme_lang_pos')
  ,array(
    'bottom'=>t("Aşağı"),
    'top'=>t("Yukarı"),
  ))
  ?> 
</div>

<hr/>


<h3><?php echo t("Time Picker")?></h3>

<div class="uk-form-row">
  <label class="uk-form-label"><?php echo t("Enabled Time Picker UI")?></label>  
  <?php 
 echo CHtml::checkBox('theme_time_pick',getOptionA('theme_time_pick')==2?true:false,array(
   'class'=>"icheck",
   'value'=>2
 ));
  ?> 
</div>

<hr/>

<div class="uk-form-row">
<label class="uk-form-label"></label>
<input type="submit" value="<?php echo Yii::t("default","Save")?>" class="uk-button uk-form-width-medium uk-button-success">
</div>

</form>