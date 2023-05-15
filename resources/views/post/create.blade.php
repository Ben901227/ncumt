@extends('basic.main')

@section('title',  '創建公告')

@section('content')
<main id="main">
  <section id="contact" class="contact mb-5">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="page-title">創建公告</h1>
        </div>
      </div>
      <!-- Start Form -->
      <div class="row justify-content-center">
        <div class = "col-md-8 ">
          <div class="form">
            <form action="{{ route('post.store') }}" method="POST" id="createRecordForm" class="createRecordForm">
              @csrf
              <div class="form-group">
                <label for="title" class="form-label">公告標題</label>                    
                <input type="text" name="title" class="form-control" id="title" placeholder="請輸入公告標題" required>
              </div>

              <div class="row">
                <div class="form-group col-md-6">
                  <label for="type" class="form-label">公告類別</label>
                  <select id="type" name="type" class="form-select" required>
                    <option selected disabled value="">請選擇公告類別</option>
                    <option value="0">隊伍相關</option>
                    <option value="1">社課相關</option>
                    <option value="2">其他</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="pin" class="form-label">公告置頂</label>
                  <select id="pin" name="pin" class="form-select" required>
                    <option selected disabled value="">請選擇是否置頂</option>
                    <option value="0">非置頂</option>
                    <option value="1">置頂</option>
                  </select>
                </div>
              </div>
              <div class="form-group ">
                  <label for="expired_at">過期時間</label>
                  <input type="datetime-local" class="form-control" id="expired_at" name="expired_at">
                </div>
              <div class="form-group">
                <label for="content" class="form-label">公告內容 </label>                    
                <textarea name="content" class="form-control" id="content" placeholder="請輸入公告內容" required></textarea>
              </div>
              
             
              <div class="row">
                <div class="text-center">
                  <button type="submit">新增公告</button>
                </div>
              </div>
            </form>
          </div>
        </div> 
      </div>
      <!-- End Form -->
    </div>
  </section>
</main><!-- End #main -->
@endsection