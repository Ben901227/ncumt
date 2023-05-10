@extends('basic.main')

@section('title',  '編輯評分')

@section('content')
<main id="main">
    <section id="contact" class="contact mb-5">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h1 class="page-title"><font face = "微軟正黑體" size = "10px" >編輯評分紀錄</font></h1>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class = "col-md-8 mb-5">
                    <div class="form mt-5">
                        <form action="{{ route('judgement.update', $judgement->id) }}" method="POST" class="php-email-form">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name" class="form-label">路線名稱</label>  
                                <input type="text" name="name" class="form-control" id="name" value = "{{ $judgement->name }}" required>
                            </div>
                            <div class="row">  
                                <div class="form-group col-md-6">
                                    <label for="normal_day" class="form-label">傳統路天數</label>
                                    <input type="number" name="normal_day" class="form-control" id="normal_day" min="0" value = "{{ $judgement->normal_day }}" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="abnormal_day" class="form-label">非傳統路天數</label>
                                    <input type="number" name="abnormal_day" class="form-control" id="abnormal_day" min="0" value = "{{ $judgement->abnormal_day }}" required>
                                </div>
                            </div>
                            <div class="row"> 
                                <div class="form-group col-md-3">
                                    <label for="level" class="form-label">路況分級</label>
                                    <select id="level" name="level" class="form-select" value = "{{ $judgement->level }}" required>
                                    <option value="0">一</option>
                                    <option value="1">二</option>
                                    <option value="2">三a</option>
                                    <option value="3">三b</option>
                                    <option value="4">四a</option>
                                    <option value="5">四b</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="road" class="form-label">路跡/指標級別</label>
                                    <select id="road" name="road" class="form-select" value = "{{ $judgement->road }}" required>
                                    @for($i = 0; $i < 10; $i++) 
                                        <option value = {{ $i + 1 }}> {{ $i + 1 }}</option>
                                    @endfor
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="terrain" class="form-label">地形級別</label>
                                    <select id="terrain" name="terrain" class="form-select" value = "{{ $judgement->terrain }}" required>
                                    @for($i = 0; $i < 10; $i++) 
                                        <option value = {{ $i + 1 }}> {{ $i + 1 }}</option>
                                    @endfor
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="plant" class="form-label">植被級別</label>
                                    <select id="plant" name="plant" class="form-select" value = "{{ $judgement->plant }}" required>
                                    @for($i = 0; $i < 10; $i++) 
                                        <option value = {{ $i + 1 }}> {{ $i + 1 }}</option>
                                    @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                            <div class="form-group col-md-6">
                                <label for="energy" class="form-label">體力級別</label>
                                <select id="energy" name="energy" class="form-select" value = "{{ $judgement->energy }}" required>
                                @for($i = 0; $i < 4; $i++) 
                                    <option value = {{ $i + 1 }}> {{ $i + 1 }}</option>
                                @endfor
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="energy" class="form-label">多背水天數</label>
                                <input type="number" name="water" class="form-control" id="water" min="0" value = "{{ $judgement->water }}" required>
                            </div>
                        </div>
                        <div class="my-3">
                            <div class="result-message"></div>
                        </div>

                        <div class="row">
                            <div class="text-center">
                                <button type="button" onclick = "caculate()" value="store" name="submit_button">開始評分</button>
                                <button type="submit" disabled value="store" id = "store_result" name="store_result">更新評分結果</button>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </section>

</main><!-- End #main -->        
@endsection