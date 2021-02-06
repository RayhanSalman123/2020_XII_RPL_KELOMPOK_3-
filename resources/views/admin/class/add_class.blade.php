@extends('layouts.admin.master')

@section('content')
<div class="card">
  <div class="card-header">
    Tambah
    <strong>Kelas</strong>


  </div>
  <div class="card-body card-block">
    <form action="{{URL::to('/admin/list_class')}}" method="POST" class="form-horizontal">
      @csrf


      <div class="row form-group">
        <div class="col col-sm-5">
          <label for="kelas" class=" form-control-label">Kelas</label>
        </div>
        <div class="col col-sm-6">
          <select name="class" class="form-control @error('class') is-invalid @enderror">
            <option>--PILIH--</option>
            <option>X</option>
            <option>XI</option>
            <option>XII</option>
          </select>
          @error('class')
          <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
         </span>
         @enderror       
       </div>
     </div>



     <div class="row form-group">
      <div class="col col-sm-5">
        <label for="jurusan" class=" form-control-label">Jurusan</label>
      </div>
      <div class="col col-sm-6">
        <select name="major" class="form-control @error('class') is-invalid @enderror">
          <option>--PILIH--</option>
          @foreach($major as $major)
          <option value="{{$major->major_id}}">{{$major->major_name}}</option>
          @endforeach
        </select>
        @error('major')
        <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
       </span>
       @enderror
     </div>
   </div>

   <div class="row form-group">
    <div class="col col-sm-5">
    <label for="group" class=" form-control-label">Grup</label>
    </div>
    <div class="col col-sm-6">
      <input type="text" name="group" placeholder="Masukkan Grup" class="form-control @error('group') is-invalid @enderror" value="{{old('group')}}">
      @error('group')
      <span class="invalid-feedback" role="alert">
       <strong>{{ $message }}</strong>
     </span>
     @enderror       
   </div>
 </div>

 <button type="submit" class="btn btn-primary btn-sm">Submit
 </button>
 <a href="/admin/list_class" " class="btn btn-danger btn-sm">Cancel
 </a>
</form>
</div>
<div class="card-footer">
</div>
</div>
@endsection