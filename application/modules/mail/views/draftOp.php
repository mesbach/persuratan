
<div class="row">
    <div class="col-sm-3">
        <?php echo $template['partials']['menuMail']; ?>
    </div>
    <div class="col-sm-9">
        <section class="panel">
            <header class="panel-heading wht-bg">
                <h4 class="gen-case">Draft Surat (5)
                    <form action="#" class="pull-right mail-src-position">
                        <div class="input-append">
                            <input type="text" class="form-control " placeholder="Cari Surat">
                        </div>
                    </form>
                </h4>
            </header>
            <div class="panel-body minimal">
                <div class="mail-option">
                    <div class="chk-all">
                        <div class="pull-left mail-checkbox ">
                            <input type="checkbox" class="">
                        </div>
                        <div class="btn-group">
                            <a data-toggle="dropdown" href="#" class="btn mini all">
                                Opsi
                                <i class="fa fa-angle-down "></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="fa fa-trash-o"></i> Hapus</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="btn-group">
                        <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                            <i class=" fa fa-refresh"></i>
                        </a>
                    </div>
                    

                    <ul class="unstyled inbox-pagination">
                        <li style="list-style: none"><span>1-50 of 124</span></li>
                        <li style="list-style: none">
                            <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                        </li>
                        <li style="list-style: none">
                            <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="table-inbox-wrap ">
                    <table class="table table-inbox table-hover">
                        <tbody>
                            <tr class="unread">
                                <td class="inbox-small-cells">
                                    <input type="checkbox" class="mail-checkbox">
                                </td>
                                <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                <td class="view-message  dont-show"><a href="<?php echo base_url(); ?>mail/operator/draftView">ABC Company</a></td>
                                <td class="view-message "><a href="<?php echo base_url(); ?>mail/operator/draftView">Lorem ipsum dolor imit set.</a></td>
                                <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                <td class="view-message  text-right">12.10 AM</td>
                            </tr>
                            <tr class="unread">
                                <td class="inbox-small-cells">
                                    <input type="checkbox" class="mail-checkbox">
                                </td>
                                <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                <td class="view-message dont-show"><a href="<?php echo base_url(); ?>mail/operator/draftView">Mr Bean</a></td>
                                <td class="view-message"><a href="<?php echo base_url(); ?>mail/operator/draftView">Hi Bro, Lorem ipsum dolor imit</a></td>
                                <td class="view-message inbox-small-cells"></td>
                                <td class="view-message text-right">Jan 11</td>
                            </tr>
                            <tr class="">
                                <td class="inbox-small-cells">
                                    <input type="checkbox" class="mail-checkbox">
                                </td>
                                <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                <td class="view-message dont-show"><a href="<?php echo base_url(); ?>mail/operator/viewOutMail">Jonathan Smith</a></td>
                                <td class="view-message"><a href="<?php echo base_url(); ?>mail/operator/viewOutMail">Lorem ipsum dolor sit amet</a></td>
                                <td class="view-message inbox-small-cells"></td>
                                <td class="view-message text-right">March 15</td>
                            </tr>
                            <tr class="">
                                <td class="inbox-small-cells">
                                    <input type="checkbox" class="mail-checkbox">
                                </td>
                                <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                <td class="view-message dont-show"><a href="<?php echo base_url(); ?>mail/operator/viewOutMail">Facebook</a></td>
                                <td class="view-message"><a href="<?php echo base_url(); ?>mail/operator/viewOutMail">Dolor sit amet, consectetuer adipiscing</a></td>
                                <td class="view-message inbox-small-cells"></td>
                                <td class="view-message text-right">June 01</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </section>
    </div>
</div>
