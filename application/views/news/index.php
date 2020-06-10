    <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4">
                        <?php if (isset($title)): ?>
                        <h2 id="showicon"> <button class="btn btn-toggle bg-danger white">Toggle</button>
                        </h2>
                        <?php endif; ?>
                        <?php if (isset($subtitle)): ?>
                        <p><?php echo $subtitle; ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="col-5">
                        <p id="loadingtext" class="alert alert-warning d-none" role="alert"><span>Processing...please
                                wait.</span></p>
                    </div>
                    <div class="col-3 text-right">
                        <a href="<?php echo base_url(); ?>homeui/setting" title="Click for User Setting">
                        </a>
                    </div>
                </div>
                <?php foreach ($news as $news_item): ?>
                <div class="main-section">
                        <h1>
                            <a href="<?php echo site_url('news/'.$news_item['slug']); ?>"><?php echo $news_item['title']; ?></a>
                        </h1>
                        <p class="text">
                            <i class="fa fa-user"><?php echo $news_item['text']; ?></a>
                        </p>
                        <hr>
                        <p class="lead">
                            <i class="fa fa-user"></i> by <a href=""><?= isset($user) ? $user['name'] : 'Unknown' ?></a>
                        </p>
                </div>
            <?php endforeach; ?>
        </div>

