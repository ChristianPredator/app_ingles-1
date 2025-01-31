<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Welcome to Ranking!</h3>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- start Quiz button -->
            <div class="start_btn"><button>Start Quiz</button></div>

            <!-- Info Box -->
            <div class="info_box">
                <div class="info-title"><span>Some Rules of this Quiz</span></div>
                <div class="info-list">
                    <div class="info">1. You will have only <span>15 seconds</span> per each question.</div>
                    <div class="info">2. Once you select your answer, it can't be undone.</div>
                    <div class="info">3. You can't select any option once time goes off.</div>
                    <div class="info">4. You can't exit from the Quiz while you're playing.</div>
                    <div class="info">5. You'll get points on the basis of your correct answers.</div>
                </div>
                <div class="buttons">
                    <button class="quit">Exit Quiz</button>
                    <button class="restart">Continue</button>
                </div>
            </div>

            <!-- Quiz Box -->
            <div class="quiz_box">
                <header>
                    <div class="title">Awesome Quiz Application</div>
                    <div class="timer">
                        <div class="time_left_txt">Time Left</div>
                        <div class="timer_sec">15</div>
                    </div>
                    <div class="time_line"></div>
                </header>
                <section>
                    <div class="que_text">
                        <!-- Here I've inserted question from JavaScript -->
                    </div>
                    <div class="option_list">
                        <!-- Here I've inserted options from JavaScript -->
                    </div>
                </section>

                <!-- footer of Quiz Box -->
                <footer>
                    <div class="total_que">
                        <!-- Here I've inserted Question Count Number from JavaScript -->
                    </div>
                    <button class="next_btn">Next Que</button>
                </footer>
            </div>

            <!-- Result Box -->
            <div class="result_box">
                <div class="icon">
                    <i class="fas fa-crown"></i>
                </div>
                <div class="complete_text">You've completed the Quiz!</div>
                <div class="score_text">
                    <!-- Here I've inserted Score Result from JavaScript -->
                </div>
                <div class="buttons">
                    <button class="restart">Replay Quiz</button>
                    <button class="quit">Quit Quiz</button>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
