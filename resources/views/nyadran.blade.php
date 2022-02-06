<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Kanggotan</title>
    <link rel="icon" href="{{ asset('img/logo.png') }}">    
    
    @include('includes.public.link')
    <link rel="stylesheet" href="{{ asset('css/nyadran.css') }}">
    @routes
    
</head>
<body class="text-center">
    <main class="form-nyadran">
        <form id="form-nyadran" action="#">
            <div class="d-flex justify-content-start">
                <a href="/" class="link-return "> <i class=' align-middle bx bx-chevron-left' ></i> return home</a>
            </div>
            <div class="card mt-3 custom-form">
                <div class="card__header"> 
                    <h3 class="text-dark">Haul Massal</h3>
                    <div class="description">Kanggotan lor rw 5, pleret.</div>
                </div>
                
                <div class="form-login">
                    <div class="form-floating" >
                        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                        <input type="text" class="form-control form-input-nyadran" name="name" id="name" placeholder="Nama">
                        <label for="name_0">Nama Pengirim</label>
                    </div>
                    <div class="form-floating mt-4">
                        <input type="text" class="form-control form-input-nyadran" name="phone" id="phone" value="-" placeholder="Password">
                        <label for="phone">Nomer Pengirim ( jika ada )</label>
                    </div>
                    <div class="form-floating mt-4">
                        <input type="text" class="form-control form-input-nyadran" name="address" id="address" placeholder="Alamat">
                        <label for="address">Alamat Pengirim</label>
                    </div>
                    
                    <div class="d-flex flex-row mt-4" id="input-arwah_0">
                        <div class="d-flex align-items-end">
                            <button class="btn-minus remove-row" type="button"><i class='bx icon-minus bxs-checkbox-minus'></i></button>
                        </div>
                        <div class="form-floating">
                            <select class="form-select form-input-nyadran" name="arwah_type[]" id="arwah_type_0">
                                <option value="Bapak">Bp.</option>
                                <option value="Ibu">Ibu.</option>
                                <option value="Saudara">Sdr.</option>
                            </select>
                        </div>
                        <div class="d-flex align-items-center form-floating mx-2">
                            <input type="text" class="form-control form-input-nyadran" name="arwah_name[]" id="arwah_name_0"  placeholder="Nama arwah">
                            <label for="arwah_name_0">Nama Arwah</label>
                        </div>
                        <div class="d-flex align-items-center form-floating mx-1">
                            <input type="text" class="form-control form-input-nyadran" name="arwah_address[]" id="arwah_adress_0"  placeholder="Alamat arwah">
                            <label for="arwah_adress_0">Alamat Arwah</label>
                        </div>
                        
                    </div>
                    <div class="d-flex flex-row justify-content-end mt-2" id="add-row-div">
                        <div class="d-flex align-items-end">
                            <button class="btn-minus" id="add-input-row" type="button"><i class='bx icon-add bxs-plus-square'></i></button>
                        </div>
                    </div>
                    
                    
                    <div class="justify-content-end d-flex">
                        <div>
                            <button class=" btn btn-md mx-2 btn-outline-danger mt-5" type="button" tabindex="1">Reset</button>
                        </div>
                        <div>
                            <button class=" btn btn-md mx-2 btn-outline-primary mt-5" id="submit-input" type="button" tabindex="1">Submit</button>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            
        </form>
    </main>
    @include('includes.public.js')
    <script src="{{asset('js/nyadran.js')}}"></script>
</body>
</html>