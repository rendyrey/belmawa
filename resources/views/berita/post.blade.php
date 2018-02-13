@include('header')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Posting Berita</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>

              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
              {{-- <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"> --}}

              {{Form::open(array('route'=>'posting','id'=>'demo=form2','class'=>'form-horizontal form-label-left','files'=>TRUE))}}
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Berita
                </label>

                <div class="radio">
                  <label>
                    {{Form::radio('jenis_berita','',true,['class'=>'flat'])}} Kemenristekdikti <br>
                    {{Form::radio('jenis_berita','','',['class'=>'flat'])}} Non-Kemenristekdikti
                    {{-- <input type="radio" class="flat" checked name="jenis_berita"> Kemenristekdikti<br> --}}
                    {{-- <input type="radio" class="flat" name="jenis_berita"> Non-Kemenristekdikti --}}
                  </label>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Sub Topik
                </label>
                <div class="col-md-8">
                  {{-- <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"> --}}
                  {{Form::select('subtopik',$subtopik_opt,'',['required'=>'','class'=>'form-control select_search','data-placeholder'=>'Sub Topik'])}}
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Topik
                </label>
                <div class="col-md-8 col-sm-6 col-xs-12">
                  {{-- <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"> --}}
                  {{Form::select('topik',$subtopik_opt,'',['required'=>'','class'=>'form-control select_search','data-placeholder'=>'Topik'])}}
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Judul Berita
                </label>
                <div class="col-md-8 col-sm-6 col-xs-12">
                  {{-- <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"> --}}
                  {{Form::text('judul','',['required'=>'','class'=>'form-control col-md-7 col-xs-12','placeholder'=>'Judul Berita'])}}
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Sumber Media
                </label>
                <div class="col-md-8 col-sm-6 col-xs-12">
                  {{-- <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"> --}}
                  {{Form::select('media',$subtopik_opt,'',['required'=>'','class'=>'form-control select_search','data-placeholder'=>'Sumber Media'])}}
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Narasumber 1
                </label>
                <div class="col-md-8 col-sm-6 col-xs-12">
                  {{-- <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"> --}}
                  {{Form::select('narasumber1',$subtopik_opt,'',['class'=>'form-control select_search','data-placeholder'=>'Narasumber 1'])}}
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Narasumber 2
                </label>
                <div class="col-md-8 col-sm-6 col-xs-12">
                  {{-- <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"> --}}
                  {{Form::select('narasumber2',$subtopik_opt,'',['class'=>'form-control select_search','data-placeholder'=>'Narasumber 2'])}}
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Narasumber 3
                </label>
                <div class="col-md-8 col-sm-6 col-xs-12">
                  {{-- <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"> --}}
                  {{Form::select('narasumber3',$subtopik_opt,'',['class'=>'form-control select_search','data-placeholder'=>'Narasumber 3'])}}
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Narasumber 4
                </label>
                <div class="col-md-8 col-sm-6 col-xs-12">
                  {{-- <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"> --}}
                  {{Form::select('narasumber4',$subtopik_opt,'',['class'=>'form-control select_search','data-placeholder'=>'Narasumber 4'])}}
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Gambar
                </label>
                <div class="col-md-8 col-sm-6 col-xs-12">
                  {{-- <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"> --}}
                  {{Form::file('gambar')}}
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3">
                </label>
                <div class="col-md-8">
                  <div class="progress" style="display:none;">
                    <div id="progressBar" class="progress-bar progress-bar-success" data-transitiongoal="10"></div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Berita</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  {{-- <input name="tgl_berita" class="form-control" placeholder="Tanggal Berita" id="single_cal1" required="" value="02/09/2018" type="text"> --}}
                  {{Form::text('tgl_berita','',['class'=>'form-control','placeholder'=>'Tanggal Beritta','id'=>'single_cal1','value'=>date('Y-m-d')])}}
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Wartawan
                </label>
                <div class="col-md-8 col-sm-6 col-xs-12">
                  {{-- <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"> --}}
                  {{Form::select('narasumber4',$subtopik_opt,'',['class'=>'form-control select_search','data-placeholder'=>'Wartawan'])}}
                </div>
              </div>
              <div class="form-group">
                <label class="ckbox ckbox-primary control-label col-md-3">
                  <span>Sumber Online</span>
                </label>
                <div class="col-md-8">
                  {{Form::checkbox('sumber_online','','',['id'=>'trigger','class'=>'flat'])}}
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Halaman
                </label>
                <div class="col-md-8 col-sm-6 col-xs-12">
                  {{Form::text('halaman','',['class'=>'form-control col-md-7 col-xs-12','placeholder'=>'Halaman'])}}
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Link Berita
                </label>
                <div class="col-md-8 col-sm-6 col-xs-12">
                  {{Form::text('link_berita','',['class'=>'form-control col-md-7 col-xs-12','placeholder'=>'Link Berita'])}}
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Ad Value
                </label>
                <div class="input-group col-md-6">
                  <span class="input-group-addon col-md3">Rp</span>
                  {{Form::text('ad_value','',['class'=>'form-control','placeholder'=>'Ad Value','id'=>'auto_number1'])}}
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">News Value
                </label>
                <div class="input-group col-md-6">
                  <span class="input-group-addon">Rp</span>
                  {{Form::text('news_value','',['class'=>'form-control','placeholder'=>'News Value','id'=>'auto_number2'])}}
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-6 col-md-offset-3" style="">
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                </div>

              {{Form::close()}}
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
  <!-- /page content -->
  @include('footer')
  <script>
  $(document).ready(function() {
  	$('form').submit(function(event){
  		event.preventDefault();
  		var formData = new FormData($('form')[0]);

  		$('.msg').hide();
  		$('.progress').show();

  		$.ajax({
  			xhr : function() {
  				var xhr = new window.XMLHttpRequest();
  				xhr.upload.addEventListener('progress', function(e){
  					if(e.lengthComputable){
  						console.log('Bytes Loaded : ' + e.loaded);
  						console.log('Total Size : ' + e.total);
  						console.log('Persen : ' + (e.loaded / e.total));

  						var percent = Math.round((e.loaded / e.total) * 100);

  						$('#progressBar').attr('aria-valuenow', percent).css('width', percent + '%').text(percent + '%');
  					}
  				});
  				return xhr;
  			},

  			type : 'POST',
  			url :  "{{route('posting')}}",
  			data : formData,
  			processData : false,
  			contentType : false,
  			success : function(response){

  				// $('form')[0].reset();
  				// $('.progress').hide();
  				$('.msg').show();
  				if(response == ""){
  					alert('File gagal di upload');
  				}else{
  					var msg = 'File berhasil di upload. ID file = ' + response;
            // $.('.progress').show();
  					$('.msg').html(msg);
            window.location.replace("{{route('post')}}");
            // return redirect()->route('post');
  				}
  			}
  		});


  	});
  });
  </script>
