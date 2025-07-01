@extends('layouts.app')

@push('css')

@endpush
@section('title')
CHAT DOKTER
@endsection
@section('content')
<a href="/dokter/konsultasi" class="btn btn-secondary btn-sm">Kembali</a>
<br /><br />
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary card-outline direct-chat direct-chat-primary shadow-none">
            <div class="card-header">
                <h3 class="card-title">Riwayat Konsultasi dengan Dr. {{$dokter->nama}}</h3>

                {{-- <div class="card-tools">
                    <span title="3 New Messages" class="badge bg-primary">3</span>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                        <i class="fas fa-comments"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div> --}}
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages" style="height: 500px">
                    <!-- Message. Default to the left -->
                    @foreach ($chat as $item)
                    @if ($item->chat_pasien != null)

                    <div class="direct-chat-msg">

                        <div class="direct-chat-infos clearfix">
                            <span class="direct-chat-name float-left">{{$item->pasien->nama}}</span>
                            <span class="direct-chat-timestamp float-right">{{$item->created_at}}</span>
                        </div>
                        <img class="direct-chat-img" src="/theme/dist/img/pasien.png" alt="Message User Image">

                        <div class="direct-chat-text">
                            {{$item->chat_pasien}}
                        </div>
                        @else

                        <div class="direct-chat-msg right">

                            <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-left">{{$item->dokter->nama}}</span>
                                <span class="direct-chat-timestamp float-right">{{$item->created_at}}</span>
                            </div>
                            <img class="direct-chat-img" src="/theme/dist/img/dokter.png" alt="Message User Image">
                            <div class="direct-chat-text">
                                {{$item->chat_dokter}}
                            </div>
                            @endif
                            <!-- /.direct-chat-infos -->
                            <!-- /.direct-chat-img -->
                            <!-- /.direct-chat-text -->
                        </div>
                        @endforeach
                    </div>
                    <!--/.direct-chat-messages-->

                    <!-- Contacts are loaded here -->
                    <div class="direct-chat-contacts">
                        <ul class="contacts-list">
                            <li>
                                <a href="#">
                                    <img class="contacts-list-img" src="../dist/img/user1-128x128.jpg"
                                        alt="User Avatar">

                                    <div class="contacts-list-info">
                                        <span class="contacts-list-name">
                                            Count Dracula
                                            <small class="contacts-list-date float-right">2/28/2015</small>
                                        </span>
                                        <span class="contacts-list-msg">How have you been? I was...</span>
                                    </div>
                                    <!-- /.contacts-list-info -->
                                </a>
                            </li>
                            <!-- End Contact Item -->
                        </ul>
                        <!-- /.contatcts-list -->
                    </div>
                    <!-- /.direct-chat-pane -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <form action="/dokter/chat/{{$dokter->id}}" method="post">
                        @csrf
                        <div class="input-group">
                            <input type="text" name="isi" placeholder="Type Message ..." class="form-control" required>
                            <span class="input-group-append">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </span>
                        </div>
                    </form>
                </div>
                <!-- /.card-footer-->
            </div>
        </div>

    </div>


    @endsection

    @push('js')
    @endpush