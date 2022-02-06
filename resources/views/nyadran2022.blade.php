@extends('layout.frontend')

@section('content')

<div class="container" style="margin-top: 6rem;">
    <div class="d-flex justify-content-between">
        <div>
            <span class="h5">
                Haul Massal 2022 
            </span>
        </div>
        <div class="search">
            <div class="input-group ">
                <input type="search" class="form-control" id="search-arwah" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <span class="input-group-text border-0" >
                    <i class='bx bx-search'></i>
                </span>
            </div>
        </div>
        
    </div>
    <div class="mt-2 table-responsive">
        <table class="table display table-bordered table-hover header-fixed" id="table-nyadran" width="100%">
            <thead class="table-dark">
                <th>No</th>
                <th>Nama Pengirim</th>
                <th>Alamat</th>
                <th>Nama Arwah</th>
                <th>Alamat Makam</th>
            </thead>
            <tbody id="table-arwah">
                
            </tbody>
        </table>
        <div id="pagination"></div>
    </div>
</div>

@endsection

@section('js')
<script src="{{asset('js/getDataNyadran.js')}}"></script>   
@endsection
