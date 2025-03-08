<nav>
    <button class="menu-toggle" aria-label="Toggle menu">&#9776;</button> <!-- Botão do menu -->
    <ul class="menu">
        <li><a href="/<?php echo getPrefixLang() ?>"><?php echo __('Home') ?> </a></li>
        <li><a href="/<?php echo getPrefixLang() ?>/generator"><?php echo __('Generator') ?></a></li>
        <li><a href="/<?php echo getPrefixLang() ?>/laws"><?php echo __('Laws') ?></a></li>
        <li><a href="/<?php echo getPrefixLang() ?>/why-use"><?php echo __('Why use?') ?></a></li>
        <li><a href="/<?php echo getPrefixLang() ?>/cookies"><?php echo __('Cookies') ?></a></li>
        <li><a href="/<?php echo getPrefixLang() ?>/contact"><?php echo __('Contact') ?></a></li>
        <li>
            <div class="dropdown">
                <span>
                    <?php
                        switch(getPrefixLang()) {
                            case 'en':
                                echo '<img width="15px" src="' . asset('images/svg/us.svg') . '" alt=""> ';
                                echo __('English');
                                break;
                            case 'pt':
                                echo '<img width="15px" src="' . asset('images/svg/br.svg') . '" alt=""> ';
                                echo __('Portuguese');
                                break;
                        }
                    ?>
                    <img width="15px" src="<?php echo asset('images/svg/down-2-svgrepo-com.svg') ?>" alt="">
                </span>
                <div class="dropdown-content">
                    <?php if(getPrefixLang() !== 'en' ) {?>
                    <a href="<?php echo changeLang('en') ?>">
                        <img width="15px" src="<?php echo asset('images/svg/us.svg') ?>" alt="">
                        <?php echo __('English') ?>
                    </a>
                    <?php } ?>
                    <?php if(getPrefixLang() !== 'pt' ) {?>
                    <a href="<?php echo changeLang('pt') ?>">
                        <img width="15px" src="<?php echo asset('images/svg/br.svg') ?>" alt="">
                        <?php echo __('Portuguese') ?>
                    </a>
                    <?php } ?>
                </div>
            </div>
        </li>
    </ul>
</nav>
