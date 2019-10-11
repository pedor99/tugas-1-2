@csrf

<div class="form-group row">
    <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

        <div class="col-md-8">
            {!! Form::text('nama', null,['class'=>"form-control",'required','autofocus']) !!}

                @error('nama')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
</div>

<div class="form-group row">
    <label for="path" class="col-md-4 col-form-label text-md-right">{{ __('Path') }}</label>

        <div class="col-md-8">
            {!! Form::text('path', null,['class'=>"form-control",'required','autofocus']) !!}

                @error('path')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
</div>

<div class="form-group row">
    <label for="kategori_galeri_id" class="col-md-4 col-form-label text-md-right">{{ __('Kategori Galeri') }}</label>

        <div class="col-md-8">
            {!! Form::select('kategori_galeri_id', (($KategoriGaleri ?? $Galeri)),null, ["class"=>"form-control","required"] ); !!}

                @error('kategori_galeri_id')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
</div>

<div class="form-group row">
    <label for="keterangan" class="col-md-4 col-form-label text-md-right">{{ __('Keterangan') }}</label>

        <div class="col-md-8">
              {!! Form::textarea('keterangan', null, ['class'=>'form-control'] ); !!}

                @error('keterangan')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
</div>

{!! Form::hidden('users_id',Auth::id() ); !!}

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
                 {{ __('Simpan Data') }}
        </button>
         <a href="{!! route('galeri.index')  !!}"class="btn btn-danger">
                 {{ __('Batal') }}</a>
        </button>
    </div>
    </div>
</div>
