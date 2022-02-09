@extends('layout.frontend')

@section('content')

<div class="container" style="margin-top: 6rem;">
    <div class="d-flex justify-content-between">
        <div>
            <span class="h5">
                Haul Massal 2022 
            </span>
            <p class="h7" id="stats"></p>
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
    <div class="d-flex mt-2" id="table-header">
        <div class="header-div w-5">No.</div>
        <div class="header-div">Nama Pengirim</div>
        <div class="header-div">Alamat Pengirim</div>
        <div class="header-div">Nama Arwah</div>
        <div class="header-div">Alamat Makam</div>
    </div>
    <div id="table-content" class="table-content">
        
    </div>
    <div class="d-flex flex-row justify-content-between mt-4">
        <div></div>
        <div class="pagination">
        </div>
        <div>
            <span id='download-file' data-toggle="tooltip" data-placement="top" title="Download table" class="import-btn">
                <i class='bx bx-sm bx-import'></i>
            </span>
        </div>
    </div>
</div>

@endsection

@section('js')
<script src="{{asset('js/getDataNyadran.js')}}"></script>   
@endsection
