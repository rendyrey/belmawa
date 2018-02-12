@include('header')
<div class="right_col" role="main" style="min-height: 2352px;">
  <div class="mainpanel">
    <div class="contentpanel">
      <div class="panel" style="padding:2em">
        <div class="panel-heading">
          <h4 class="panel-title">Pencarian Berita</h4>
        </div><!-- panel-heading -->
        {{Form::open(array('action'=>'BeritaController@cari','method'=>'post','id'=>'form_cari'))}}
          <div class="row">
            <div class="col-md-4">
              <div class="row">
                <div class="col-md-6">
                  <div class="input-group">
                    {{Form::text('tgl_awal','',['class'=>'form-control','placeholder'=>'Tgl Berita Awal','id'=>'single_cal1'])}}
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  </div>
                </div> <!-- col -->
                <div class="col-md-6">
                  <div class="input-group">
                    {{Form::text('tgl_akhir','',['class'=>'form-control','placeholder'=>'Tgl Berita akhir','id'=>'single_cal2'])}}
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                  </div>
                </div> <!-- col -->

              </div> <!-- row -->

            </div> <!-- col -->
            <div class="col-md-4">
              <div class="form-group">
                {{-- <input name="kata_kunci" placeholder="Kata kunci" class="form-control" maxlength="30" type="text"> --}}
                {{Form::text('kata_kunci','',['class'=>'form-control','placeholder'=>'Kata Kunci'])}}
              </div>
            </div> <!-- col -->
            <div class="col-md-4">
              <div class="form-group">
                {{Form::select('media',[''=>'','id'=>'rendy'],'',['class'=>'form-control select_search','data-placeholder'=>'Sumber Media'])}}
              </div>
            </div> <!-- col -->
          </div> <!-- row -->
          <br>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                {{Form::select('tone_berita',$tone_berita_opt,'',['class'=>'form-control select_search','data-placeholder'=>'Tone Berita','tab-index'=>'-1','aria-hidden'=>'true'])}}
              </div>
            </div> <!-- col -->
            <div class="col-md-4">
              <div class="form-group">
                {{Form::select('jenis_berita',$tone_berita_opt,'',['class'=>'form-control select_search','data-placeholder'=>'Jenis Berita','tab-index'=>'-1','aria-hidden'=>'true'])}}

              </div>
            </div> <!-- col -->
            <div class="col-md-4">
              <div class="form-group">
                {{Form::select('sub_topik',$tone_berita_opt,'',['class'=>'form-control select_search','data-placeholder'=>'Sub Topik','tab-index'=>'-1','aria-hidden'=>'true'])}}

                </div>
              </div>


            </div> <!-- row -->
            <br>
            <div class="row">

              <div class="col-md-4">
                <div class="form-group">
                  <button class="btn btn-primary btn-block" form="form_cari" id="btn_cari">Cari</button>
                </div>
              </div>
            </div><!-- row -->
          </form>





</div><!-- contentpanel -->

</div><!-- mainpanel -->
</div>
<!-- footer content -->

<!-- /footer content -->
</div>
@include('footer')
