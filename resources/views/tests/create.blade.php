@extends('layouts.admin_layout')

@section('title', 'Test qoshish')

@section('content')

<div class="card">
  <div class="card-header">Test project</div>
  <div class="card-body">

    <form action="{{ url('admin_panel/test') }}" method="post">
      {!! csrf_field() !!}
      <label>Kurs</label></br>
      <input type="text" name="curse" id="curse" class="form-control"></br>
      <label>Dars</label></br>
      <input type="text" name="lesson" id="lesson" class="form-control"></br>
      <label>Savol</label></br>
      <input type="text" name="question" id="question" class="form-control"></br>
      <!-- Variant start -->
      <div class="row justify-content-center">
        <div class="">
        <input class="form-check-input" onclick="varianta()" name="" type="checkbox" value="" id="variant_a">
        <label class="form-check-label" for="variant_a">
          </label>
        </div>
        <div class="col-11">
          <label>Variant A</label></br>
          <input type="text" name="variant_1" id="variant_1" class="form-control"></br>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="">
        <input class="form-check-input" onclick="variantb()" name="" type="checkbox" value="" id="variant_b">
        <label class="form-check-label" for="variant_b">
          </label>
        </div>
        <div class="col-11">
          <label>Variant B</label></br>
          <input type="text" name="variant_2" id="variant_2" class="form-control"></br>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="">
        <input class="form-check-input" onclick="variantc()" name="" type="checkbox" value="" id="variant_c">
        <label class="form-check-label" for="variant_c">
          </label>
        </div>
        <div class="col-11">
          <label>Variant C</label></br>
          <input type="text" name="variant_3" id="variant_3" class="form-control"></br>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="">
        <input class="form-check-input" onclick="variantd()" type="checkbox" value="" id="variant_d">
        <label class="form-check-label" for="variant_d">
          </label>
        </div>
        <div class="col-11">
          <label>Variant D</label></br>
          <input type="text" name="variant_4" id="variant_4" class="form-control"></br>
        </div>
      </div>


      <!-- Variant end -->
      <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@endsection
