@extends('layouts.masters.main')

@section('page-content')

@include('layouts.partials.nav')

<!-- start top_bg -->
<div class="top_bg">
<div class="wrap">
<div class="main_top">
	<h2 class="style">{{$produk->nama_produk}}</h2>
</div>
</div>
</div>
<!-- start main -->
<div class="main_bg">
<div class="wrap">
<div class="main">
	<!-- start content -->
	<div class="single">
			<!-- start span1_of_1 -->
			<div class="left_content">
			<div class="span1_of_1">
				<!-- start product_slider -->
				<div class="product-view">
				    <div class="product-essential">
				        <div class="product-img-box">
				    <div class="more-views">
				        <div class="more-views-container">
				        <ul>
				            <li>
				            	<a class="cs-fancybox-thumbs" data-fancybox-group="thumb"  href=""  title="" alt="">
				            	<img src="" src_main=""  title="" alt="" /></a>            
				            </li>
				            <li>
				            	<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" href=""  title="" alt="">
				            	<img src="" src_main=""  title="" alt="" /></a>
				            </li>
				            <li>
				            	<a class="cs-fancybox-thumbs" data-fancybox-group="thumb"  href=""  title="" alt="">
				            	<img src="" src_main=""  title="" alt="" /></a> 
				            </li>
				            <li>
				            	<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" href=""  title="" alt="">
				            	<img src="" src_main="" title="" alt="" /></a>  
				            </li>
				            <li>
				            	<a class="cs-fancybox-thumbs" data-fancybox-group="thumb"  href=""  title="" alt="">
				            	<img src="" src_main="" title="" alt="" /></a>
				            </li>
				          </ul>
				        </div>
				    </div>
				    <div class="product-image"> 
				        <a class="cs-fancybox-thumbs cloud-zoom" rel="adjustX:30,adjustY:0,position:'right',tint:'#202020',tintOpacity:0.5,smoothMove:2,showTitle:true,titleOpacity:0.5" data-fancybox-group="thumb" href="/images/{{ $produk->picture }}" title="Women Shorts" alt="Women Shorts">
				           	<img src="{{ asset('/images/' . $produk->picture) }}" alt="{{ $produk->nama_produk }}" title="{{ $produk->nama_produk }}" />
				        </a>
				   </div>
					<script type="text/javascript">
						var prodGallery = jQblvg.parseJSON('{"prod_1":{"main":{"orig":"images/0001-2.jpg","main":"images/large/0001-2.jpg","thumb":"images/small/0001-2.jpg","label":""},"gallery":{"item_0":{"orig":"images/0001-2.jpg","main":"images/large/0001-2.jpg","thumb":"images/small/0001-2.jpg","label":""},"item_1":{"orig":"images/0001-1.jpg","main":"images/large/0001-1.jpg","thumb":"images/small/0001-1.jpg","label":""},"item_2":{"orig":"images/0001-5.jpg","main":"images/large/0001-5.jpg","thumb":"images/small/0001-5.jpg","label":""},"item_3":{"orig":"images/0001-3.jpg","main":"images/large/0001-3.jpg","thumb":"images/small/0001-3.jpg","label":""},"item_4":{"orig":"images/0001-4.jpg","main":"images/large/0001-4.jpg","thumb":"images/small/0001-4.jpg","label":""}},"type":"simple","video":false}}'),
						    gallery_elmnt = jQblvg('.product-img-box'),
						    galleryObj = new Object(),
						    gallery_conf = new Object();
						    gallery_conf.moreviewitem = '<a class="cs-fancybox-thumbs" data-fancybox-group="thumb"  href=""  title="" alt=""><img src="" src_main="" title="" alt="" /></a>';
						    gallery_conf.animspeed = 200;
						jQblvg(document).ready(function() {
						    galleryObj[1] = new prodViewGalleryForm(prodGallery, 'prod_1', gallery_elmnt, gallery_conf, '.product-image', '.more-views', 'http:');
						        jQblvg('.product-image .cs-fancybox-thumbs').absoluteClick();
						    jQblvg('.cs-fancybox-thumbs').fancybox({ prevEffect : 'none', 
						                             nextEffect : 'none',
						                             closeBtn : true,
						                             arrows : true,
						                             nextClick : true, 
						                             helpers: {
						                               thumbs : {
						                                   position: 'bottom'
						                               }
						                             }
						                             });
						    jQblvg('#wrap').css('z-index', '100');
						            jQblvg('.more-views-container').elScroll({type: 'vertical', elqty: 4, btn_pos: 'border', scroll_speed: 400 });
						        
						});
						
						function initGallery(a,b,element) {
						    galleryObj[a] = new prodViewGalleryForm(prods, b, gallery_elmnt, gallery_conf, '.product-image', '.more-views', '');
						};
					</script>
				</div>
				</div>
				</div>
			<!-- end product_slider -->
			</div>
			<!-- start span1_of_1 -->
			<div class="span1_of_1_des">
				  <div class="desc1">
					<h3>{{ $produk->nama_produk }}</h3>
					<h5>{{ $produk->dana }}</h5>
					<div class="available">
						@if(Auth::user()->role_id==3)
						<div class="top_main">
				            <a href="{{ url('donate') }}/{{ $produk->id_produk }}" >Donate</a>
				            <div class="clear"></div>
				        </div>
				        @endif


						<p>{{ $produk->deskripsi_produk }}</p>
					</div>
					<!-- <div class="share-desc">
						<div class="share">
							<h4>Share Product :</h4>
							<ul class="share_nav">
								<li><a href="#"><img src="/images/facebook.png" title="facebook"></a></li>
								<li><a href="#"><img src="/images/twitter.png" title="Twiiter"></a></li>
								<li><a href="#"><img src="/images/rss.png" title="Rss"></a></li>
								<li><a href="#"><img src="/images/gpluse.png" title="Google+"></a></li>
				    		</ul>
						</div>
						<div class="clear"></div>
					</div> -->
			   	 </div>
			   	</div>
			   	<div class="clear"></div>
		   	</div>
		   	@include('layouts.partials.side')
	</div>
</div>
</div>