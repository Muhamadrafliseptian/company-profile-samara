@extends('layouts.appAdmin')
@section('single_partner')

    <div class="container" data-aos="fade-up">
        <section id="portfolio" class="portfolio">

                    <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>MYob</h2>
                        <h3> <span>Kerja Sama Dengan MYob</span></h3>
                    </div>
            <div class="card3 shadow">
                <div class="card-body">
                    <div class="container" data-aos="fade-up">
                        <div class=" position-relative">
                            <div class="wrapper text-center">
                                <img id="img-index" class="rounded" src="assets/img/ui2.webp" alt="">
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    <img class="bi-video bi-play-circle-fill video-btn" src="{{ asset('assets/img/play.png') }}"
                                        data-bs-toggle="modal"
                                        data-src="{{ url('https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1" allow="autoplay') }}"
                                        data-bs-target="#myModal" width="20" height="20" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="entry-meta">
                                    <ul class="d-flex">
                                        {{-- <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                href="blog-single.html">John Doe</a></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li> --}}
                                        <li class="d-flex mx-2 mt-2 "><i class="bi bi-person me-2"></i> <a
                                                href="blog-single.html">John Doe</a></li>
                                        <li class="d-flex mx-2 mt-2"><i class="bi bi-clock me-2"></i> <a
                                                href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                                    </ul>
                                </div>

                                <div class="entry-content lh-base">
                                    <p>
                                        Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi
                                        praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                                        Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est
                                        cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis
                                        dolore.
                                    </p>

                                    <p>
                                        Sit repellat hic cupiditate hic ut nemo. Quis nihil sunt non reiciendis. Sequi in
                                        accusamus harum vel aspernatur. Excepturi numquam nihil cumque odio. Et voluptate
                                        cupiditate.
                                    </p>

                                    <blockquote>
                                        <p>
                                            Et vero doloremque tempore voluptatem ratione vel aut. Deleniti sunt animi aut. Aut
                                            eos aliquam doloribus minus autem quos.
                                        </p>
                                    </blockquote>

                                    <p >
                                        Sed quo laboriosam qui architecto. Occaecati repellendus omnis dicta inventore tempore
                                        provident voluptas mollitia aliquid. Id repellendus quia. Asperiores nihil magni dicta
                                        est suscipit perspiciatis. Voluptate ex rerum assumenda dolores nihil quaerat.
                                        Dolor porro tempora et quibusdam voluptas. Beatae aut at ad qui tempore corrupti velit
                                        quisquam rerum. Omnis dolorum exercitationem harum qui qui blanditiis neque.
                                        Iusto autem itaque. Repudiandae hic quae aspernatur ea neque qui. Architecto voluptatem
                                        magni. Vel magnam quod et tempora deleniti error rerum nihil tempora.
                                    </p>

                                    <h3>Et quae iure vel ut odit alias.</h3>
                                    <p>
                                        Officiis animi maxime nulla quo et harum eum quis a. Sit hic in qui quos fugit ut rerum
                                        atque. Optio provident dolores atque voluptatem rem excepturi molestiae qui. Voluptatem
                                        laborum omnis ullam quibusdam perspiciatis nulla nostrum. Voluptatum est libero eum
                                        nesciunt aliquid qui.
                                        Quia et suscipit non sequi. Maxime sed odit. Beatae nesciunt nesciunt accusamus quia aut
                                        ratione aspernatur dolor. Sint harum eveniet dicta exercitationem minima. Exercitationem
                                        omnis asperiores natus aperiam dolor consequatur id ex sed. Quibusdam rerum dolores sint
                                        consequatur quidem ea.
                                        Beatae minima sunt libero soluta sapiente in rem assumenda. Et qui odit voluptatem. Cum
                                        quibusdam voluptatem voluptatem accusamus mollitia aut atque aut.
                                    </p>
                                    <img src="{{ asset('assets/img/blog/blog-inside-post.jpg') }}" class="img-fluid"
                                        alt="">

                                    <h3>Ut repellat blanditiis est dolore sunt dolorum quae.</h3>
                                    <p>
                                        Rerum ea est assumenda pariatur quasi et quam. Facilis nam porro amet nostrum. In
                                        assumenda quia quae a id praesentium. Quos deleniti libero sed occaecati aut porro
                                        autem. Consectetur sed excepturi sint non placeat quia repellat incidunt labore. Autem
                                        facilis hic dolorum dolores vel.
                                        Consectetur quasi id et optio praesentium aut asperiores eaque aut. Explicabo omnis
                                        quibusdam esse. Ex libero illum iusto totam et ut aut blanditiis. Veritatis numquam ut
                                        illum ut a quam vitae.
                                    </p>
                                    <p>
                                        Alias quia non aliquid. Eos et ea velit. Voluptatem maxime enim omnis ipsa voluptas
                                        incidunt. Nulla sit eaque mollitia nisi asperiores est veniam.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @endsection
