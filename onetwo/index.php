<?php get_header(); ?>

    <section class="products">
        <div class="container">
            <div class="products__name">
                <h2 class="products__name__title"><?php the_field('name__title') ?></h2>
                <?php if (get_field('hit')): ?>
                    <div class="products__name__text"><p><i class="fas fa-bolt mr-2"></i>Хит продаж</p></div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="bg">
        <div class="container">
            <div class="row bg__main">
                <div class="col">
                    <div class="bg__items mb-3">
                        <div class="bg__icon"><i class="fas fa-tags"></i></div>
                        <p class="bg__text">Цена(без НДС)</p>
                    </div>
                    <div class="bg__items">
                        <div class="bg__default"><p><?php the_field('cost') ?></p></div>
                    </div>
                </div>
                <div class="col">
                    <div class="bg__block mb-3">
                        <div class="bg__circle"><i class="fas fa-arrows-alt-h"></i></div>
                        <p class="bg__text">Диаметр</p>
                    </div>
                    <div class="bg__block">
                        <div class="bg__active"><p><?php the_field('diameter-one') ?></p></div>
                        <div class="bg__active"><p><?php the_field('diameter-two') ?></p></div>
                        <div class="bg__active"><p><?php the_field('diameter-four') ?></p></div>
                        <div class="bg__active"><p><?php the_field('diameter-four') ?></p></div>
                    </div>
                </div>
                <div class="col">
                    <div class="bg__block mb-3">
                        <div class="bg__icon"><i class="fas fa-archive"></i></div>
                        <p class="bg__text">Упаковка</p>
                    </div>
                    <div class="bg__block">
                        <div class="bg__active"><p><?php the_field('packaging-one') ?></p></div>
                        <div class="bg__active"><p><?php the_field('packaging-two') ?></p></div>
                        <div class="bg__active"><p><?php the_field('packaging-three') ?></p></div>
                        <div class="bg__active"><p><?php the_field('packaging-four') ?></p></div>
                    </div>
                </div>
                <div class="col">
                    <div class="bg__block mb-3">
                        <div class="bg__icon"><i class="fas fa-syringe"></i></div>
                        <p class="bg__text">Тип электродов <?php the_field('type') ?></p>
                    </div>
                </div>
            </div>
            <div>
                <button class="bg__button" data-toggle="modal" data-target="#exampleModal">оформить заявку</button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">заявка на ПЭ LB-52U ГОСТ</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <!--sales@marketing-na100.ru  --  Нужно активировать аккаунт для работы
                                    https://formspree.io/-->
                                    <form action="https://formspree.io/sales@marketing-na100.ru" method="post">
                                        <input type="text" name="Имя" placeholder="Имя">
                                        <input type="tel" name="Телефон" placeholder="Телефон">
                                        <input type="email" id="email" name="Email" placeholder="Email">
                                        <div class="form-group">
                                            <input type="checkbox" id="html" name="Checkbox">
                                            <label for="html">Даю согласие на обработку персональных данных</label>
                                        </div>
                                        <button type="submit" class="bg__send">Отправить</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>