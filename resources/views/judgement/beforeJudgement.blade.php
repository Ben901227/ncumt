@section('title',  '評分紀錄表')
<section id="contact" class="contact">
    <div class="container">
        <div class="row gy-4 justify-content-center text-center">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="page-title">評分紀錄表</h1>
                    <a>過去隊伍難度的評分紀錄。</a>
                </div>
            </div>
            <div class="col-md-12 text-center table-responsive">
                <table class="table table-light table-bordered table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">路線名稱</th>
                        <th scope="col">總天數</th>
                        <th scope="col">傳統路</th>
                        <th scope="col">非傳統路</th>
                        <th scope="col">路線</th>
                        <th scope="col">路標</th>
                        <th scope="col">地形</th>
                        <th scope="col">植被</th>
                        <th scope="col">體力</th>
                        <th scope="col">背水天數</th>
                        <th scope="col">難度總分</th>
                        <th scope="col">隊伍難度</th>
                        <!-- 幹部才能編輯 -->
                        @auth
                            @if(Auth::user()->role > 0)
                                <th scope="col">編輯/刪除</th>
                            @endif
                        @endauth
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($judgements as $judgement)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            @if ($judgement->trip_tag == 0)
                                <td >{{ $judgement->name }}</td>
                            @elseif ($judgement->trip_tag == 1)
                                <td>{{ $judgement->name }} <span style="color:red">(壓縮行程)</span></td>
                            @elseif ($judgement->trip_tag == 2)
                                <td>{{ $judgement->name }} <span style="color:green">(寬鬆行程)</span></td>
                            @endif
                            <td>{{ $judgement->normal_day + $judgement->abnormal_day}}</td>
                            <td>{{ $judgement->normal_day }} 天</td>
                            <td>{{ $judgement->abnormal_day }} 天</td>
                            <td>{{ $levelArray[$judgement->level] }}</td>
                            <td>{{ $judgement->road }} 分</td>
                            <td>{{ $judgement->terrain }} 分</td>
                            <td>{{ $judgement->plant }} 分</td>
                            <td>{{ $judgement->energy }}</td>
                            <td>{{ $judgement->water }} 天</td>
                            <td>{{ $judgement->score }} 分</td>
                            <td>{{ $judgement->result_level }}</td>
                            <!-- 幹部才能編輯 -->
                            @auth
                                @if(Auth::user()->role > 0)
                                    <td>
                                        <!-- 編輯按鈕 -->
                                        <button wire:click="edit({{ $judgement->id }})" class="bi bi-pencil-square"></button>
                                        <!-- 刪除按鈕 -->
                                        <button onclick="confirmDelete('{{ $judgement->id }}')" class="bi bi-trash"></button>
                                    </td>
                                @endif
                            @endauth
                        </tr>
                    @endforeach
                    {{--若資料不滿一頁，則補空--}}
                    @for($i = count($judgements) + 1; $i <= $amountOfPage ; $i++)
                        <tr>
                            <td>{{ $i }}</td>
                            @for($j = 1; $j <= $amountOfJudgementColumns - 2; $j++)
                                <td></td>
                            @endfor
                        </tr>
                    @endfor
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {{ $judgements->links() }}
                </div>
            </div><!-- 評分紀錄表 End  -->
        </div>
    </div>
</section>
<script src="{{ asset('assets/js/confirmDelete.js') }}"></script>



