<?php include_once('header.php'); ?>
<!-- Page Content -->
        <div id="page-content-wrapper" class="chart">
            <div class="top-menu-container">
                <div class="top-menu">
                    <button class="btn left lock"><span class="icon lock"></span></button>
                    <div class="lock-baloon bubble left">Your Feed: <b>Green Capital</b></div>
                    <button class="btn right plus">+</button>
                    <button class="btn right"><span class="caret"></span> Sort</button>
                    <button class="btn right"><span class="glyphicon glyphicon-star"></span> Bookmarked</button>
                    <button class="btn right">News I've Shared</button>
                </div>
            </div>
            <div class="chart-container">
                <div class="bar-chart chart-wrapper left">
                    <div class="chart-title">Open Rates Over Time</div>
                    <canvas id="bar-chart" width="480" height="250"></canvas>
                </div>
                <div class="line-chart chart-wrapper right">
                    <div class="chart-title"><span id="prev-chart" class="nav-chart glyphicon glyphicon-play"></span>New Clients<span id="next-chart" class="nav-chart glyphicon glyphicon-play"></span></div>
                    <canvas id="line-chart" width="480" height="250"></canvas>
                </div>
                <div class="visitor-wrapper left">
                    <div id="client-base" class="rect-summary">
                        <div class="value-summary">105</div>
                        <div class="label-summary">Client Base</div>
                        <div class="delta-summary up">
                            <div class="up-value">6%</div>
                            <span class="delta-symbol glyphicon glyphicon-play"></span>
                            <div class="down-value">x</div>
                        </div>
                    </div>
                    <div id="client-meetings" class="rect-summary">
                        <div class="value-summary">15</div>
                        <div class="label-summary">Client Meetings</div>
                        <div class="delta-summary down">
                            <div class="up-value">x</div>
                            <span class="delta-symbol glyphicon glyphicon-play"></span>
                            <div class="down-value">3%</div>
                        </div>
                    </div>
                    <div id="unique-view" class="pie">
                        <img src="<?php echo URL::to('/') ;?>/admin/sidekyc/img/pie1.png">
                        <div class="pie-value">415</div>
                        <div class="pie-label">unique views</div>
                    </div>
                    <div id="ave-time" class="pie">
                        <img src="<?php echo URL::to('/') ;?>/admin/sidekyc/img/pie2.png">
                        <div class="pie-value">0:55</div>
                        <div class="pie-label">avg. read time</div> 
                    </div>
                </div>
                <div class="search-box-wrapper right">
                    <span class="glyphicon glyphicon-search"></span>
                    <input type="text" placeholder="SEARCH ANALYTICS BY CLIENT" />
                </div>
                <div class="client-table-wrapper right">
                    <table id="client-table" class="table table-striped">
                        <thead>
                            <tr>
                                <th><div class="column-title">Feeds Sent</div></th>
                                <th><div class="column-title">Client</div></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>150</td>
                                <td>David Bradley And Susan Bradley</td>
                            </tr>
                            <tr>
                                <td>50</td>
                                <td>Michael Al-Binawi</td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>Morris Goldstein</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Dr. Alan Rickman</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-editor-wrapper left">
                    <div class="text-editor-title">Quick Edit</div>
                    <div id="text-editor"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
	<?php include_once('footer.php'); ?>