<div
    class="nk-header-title nk-header-title-md nk-header-title-parallax nk-header-title-parallax-opacity nk-header-title-boxed">
    <div class="bg-image op-5">
        <img src="{{asset('storage') . '/' . $single->thumbnail}}" alt="{{ $single->title }}"
             class="jarallax-img">
    </div>
    <div class="nk-header-table">
        <div class="nk-header-table-cell">
            <div class="container">

                <div class="nk-header-text">

                    <div class="row text-left">
                        <div class="col-lg-8">
                            <div class="nk-gap-5 d-none + d-lg-block"></div>
                            <h1 class="nk-title">{{$single->title}}</h1>
                            <div class="nk-gap-3 d-none + d-lg-block"></div>
                            <div class="nk-gap-5 d-none + d-lg-block"></div>
                        </div>
                        <div class="col-lg-4">
                            <aside class="nk-sidebar nk-sidebar-right">
                                <div class="nk-gap-5 d-none + d-lg-block"></div>
                                <div class="nk-gap d-lg-none"></div>
                                <table>
                                    <tbody>
                                    <tr>
                                        <td><strong>Опубликовано:</strong> &nbsp;&nbsp;&nbsp;</td>
                                        <td>{{date( 'd.m.Y H:i', strtotime( $single->created_at ) )}}</td>
                                    </tr>
                                    @if($single->created_at != $single->updated_at)
                                        <tr>
                                            <td><strong>Изменено:</strong> &nbsp;&nbsp;&nbsp;</td>
                                            <td>{{date( 'd.m.Y H:i', strtotime( $single->updated_at ) )}}</td>
                                        </tr>
                                    @endif
                                    <tr>
                                        <td><strong>Просмотров:</strong> &nbsp;&nbsp;&nbsp;</td>
                                        <td>{{$single->views_count}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="nk-gap-5 d-lg-none"></div>
                            </aside>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
