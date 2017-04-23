<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <form class="login-form" action="" method="post">
                    <h1 class="section-title strong">Parolamı Sıfırla</h1>

                    <?php echo $this->alert->flash(['error', 'success']); ?>

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="form-password">Yeni parolanız</label>
                                <input class="form-control" name="password" id="form-password" type="password" required="required" tabindex="1">
                            </div>

                            <button class="btn btn-success btn-block" type="submit" tabindex="2">Parolamı Sıfırla</button>
                        </div>
                    </div>

                    <div class="alert alert-info">
                        Henüz kayıt olmadıysanız <a href="<?php echo clink(['@user', 'olustur']) ?>" title="Yeni hesap oluştur">yeni hesap</a> oluşturun.
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
