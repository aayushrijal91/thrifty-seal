<section class="solutions">
    <div class="container-fluid px-0">
        <div class="row no-gutters">
            <div class="col-6">
                <div class="problem-top">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23.7" height="23.7" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                    </svg><span class="pl-3"><?= get_field('solution_text_1', 'options'); ?></span>
                </div>
            </div>
            <div class="col-6">
                <div class="solved-top">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="24" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                        <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                    </svg><span class="pl-3"><?= get_field('solution_text_2', 'options'); ?></span>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-6 problem">
                <div class="row no-gutters justify-content-end h-100">
                    <div class="col-lg-6">
                        <div class="h16 fw-600"><?= get_field("problem_small_title", "options") ?></div>
                        <div class="text-uppercase letter-spacing-n02 fw-700 h2"><?= get_field("problem_hero_title", "options") ?></div>
                        <ul class="problem-list">
                        <?php if (have_rows('problems_list', 'option')) : ?>
                                <?php while (have_rows('problems_list', 'option')) : the_row();
                                    $problem = get_sub_field('problem');
                                ?>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" fill="#8DC63B" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                        </svg>
                                        <span class="pl-3"><?= $problem ?></span>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-6 solved">
                <div class="row no-gutters h-100">
                    <div class="col-lg-6">
                        <div class="h16 fw-600 text-capitalize"><?= get_field("solution_small_title", "options") ?></div>
                        <div class="text-uppercase letter-spacing-n02 fw-700 h2"><?= get_field("solution_hero_title", "options") ?></div>
                        <ul class="solved-list">
                            <?php if (have_rows('solution_list', 'option')) : ?>
                                <?php while (have_rows('solution_list', 'option')) : the_row();
                                    $solution = get_sub_field('solution');
                                ?>
                                    <li>
                                        <span class="pr-3"><?= $solution ?></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" fill="#2E442D" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                        </svg>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>