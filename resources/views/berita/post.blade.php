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
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Sub Topik
                </label>
                <div class="col-md-8">
                  {{-- <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"> --}}
                  {{Form::select('subtopik',$subtopik_opt,'',['required'=>'','class'=>'form-control select_search'])}}
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Topik
                </label>
                <div class="col-md-8 col-sm-6 col-xs-12">
                  {{-- <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"> --}}
                  {{Form::select('topik',$subtopik_opt,'',['required'=>'','class'=>'form-control'])}}
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
                  {{Form::select('media',$subtopik_opt,'',['required'=>'','class'=>'form-control'])}}
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Narasumber 1
                </label>
                <div class="col-md-8 col-sm-6 col-xs-12">
                  {{-- <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"> --}}
                  {{Form::select('narasumber1',$subtopik_opt,'',['class'=>'form-control'])}}
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Narasumber 2
                </label>
                <div class="col-md-8 col-sm-6 col-xs-12">
                  {{-- <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"> --}}
                  {{Form::select('narasumber2',$subtopik_opt,'',['class'=>'form-control'])}}
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Narasumber 3
                </label>
                <div class="col-md-8 col-sm-6 col-xs-12">
                  {{-- <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"> --}}
                  {{Form::select('narasumber3',$subtopik_opt,'',['class'=>'form-control'])}}
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Narasumber 4
                </label>
                <div class="col-md-8 col-sm-6 col-xs-12">
                  {{-- <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"> --}}
                  {{Form::select('narasumber4',$subtopik_opt,'',['class'=>'form-control'])}}
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
                  {{Form::select('narasumber4',$subtopik_opt,'',['class'=>'form-control'])}}
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div id="gender" class="btn-group" data-toggle="buttons">
                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                      <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                    </label>
                    <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                      <input type="radio" name="gender" value="female"> Female
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button class="btn btn-primary" type="button">Cancel</button>
                  <button class="btn btn-primary" type="reset">Reset</button>
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>


  </div>
</div>
<!-- /page content -->
@include('footer')
