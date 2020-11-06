<div>
    <div class="container mt-5 shadow bg-white rounded">
        <div class="row">
            <div class="col-3 col-sm-3">
                <div class="nav flex-column nav-pills mt-4 mb-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Verifikasi Pembayaran</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">List User</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Rekomendasi</a>
                </div>
            </div>
            <div class="col-9 col-sm-9">
                <div class="tab-content mt-3" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        @livewire('verifikasi')
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        @livewire('ubah-password')
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        @livewire('rekomendasi')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
