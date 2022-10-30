

<?php
$lang = ucfirst(LaravelLocalization::getCurrentLocale());
$index = 1;
?>


<?php $__env->startSection('main'); ?>
    <?php if(session()->has('message')): ?>
        <script src="<?php echo e(asset('js/formerror.js')); ?>"></script>
    <?php endif; ?>

    

    <?php if($errors->any()): ?>
        <script src="<?php echo e(asset('js/formerror.js')); ?>"></script>
    <?php endif; ?>



    <section class="main-section">
        <div class="container">
            
            <header>
                <div class="header-logo">
                    <img src="<?php echo e(Voyager::image($data->logo)); ?>" alt="logo">
                </div>
                <div class="header-list">
                    <ul>
                        <li><a href="#hero"><?php echo e(__('index.main')); ?></a></li>
                        <li><a href="#contact_us"><?php echo e(__('index.contactUs')); ?></a></li>
                        <li><a
                                href="/<?php echo e(LaravelLocalization::getCurrentLocale() == 'ar' ? 'en' : 'ar'); ?>"><?php echo e(__('index.lang')); ?></a>
                        </li>
                    </ul>
                </div>
            </header>
            
            
            <div class="hero" id="hero">
                <div class="row">
                    <div class="col-md-6 hero-text-content" data-aos="fade-up" data-aos-duration="1000">
                        <h2><?php echo e($data['main_word_header_' . $lang]); ?></h2>
                        <h4><?php echo e($data['title_header_' . $lang]); ?></h4>
                        <p>
                            <?php echo e($data['desc_header_' . $lang]); ?> </p>

                        <div class="circule-image">
                            <img src="<?php echo e(asset('img/circule-word.png')); ?>" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 hero-image-content owl-carousel owl-theme" id="owl-carousel" data-aos="fade-down"
                        data-aos-duration="1000">

                        <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <img src="<?php echo e(Voyager::image($slider->image)); ?>" alt="">
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </div>
            

            
            <div class="vision" id="vision">
                <div class="row align-items-center">

                    <div class="col-md-6 vision-image-content" data-aos="zoom-in" data-aos-duration="1000">
                        <img src="<?php echo e(Voyager::image($data->image_royaa_message)); ?>" alt="">
                    </div>

                    <div class="col-md-6 vision-text-content" data-aos="fade-right" data-aos-duration="1000">
                        <h3><?php echo e(__('index.vision')); ?></h3>
                        <p>
                            <?php echo e($data['royaa_desc_' . $lang]); ?>

                        </p>
                    </div>

                </div>
            </div>
            
        </div>
    </section>
    
    <section class="our-message">
        <div class="container">
            <div class="row">
                <div class="col-12 message-content">
                    <div class="quotation-mark right-quotation-mark">
                        <img src="<?php echo e(asset('img/quotation-mark.png')); ?>" alt="" data-aos="zoom-in"
                            data-aos-duration="1000">
                        <img src="<?php echo e(asset('img/quotation-mark.png')); ?>" alt="" data-aos="zoom-in"
                            data-aos-duration="1000">
                    </div>
                    <div class="message-text" data-aos="zoom-out" data-aos-duration="1000">
                        <h2><?php echo e(__('index.ourMessage')); ?></h2>
                        <p>
                            <?php echo e($data['message_des_' . $lang]); ?>


                        </p>
                    </div>
                    <div class="quotation-mark left-quotation-mark">
                        <img src="<?php echo e(asset('img/quotation-mark.png')); ?>" alt="" data-aos="zoom-in"
                            data-aos-duration="1000">
                        <img src="<?php echo e(asset('img/quotation-mark.png')); ?>" alt="" data-aos="zoom-in"
                            data-aos-duration="1000">
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    
    <section class="our-services">
        <div class="container">
            <div class="row">
                <div class="col-md-6 services " data-aos="fade-up" data-aos-duration="1000">
                    <div class="services">
                        <ul class="tabs">
                            <?php
                                $first = 1;
                            ?>
                            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="<?php echo e($first++ == 1 ? 'active' : ''); ?>" data-cont=".e<?php echo e($service->id); ?>">
                                <?php echo e($service['title_' . $lang]); ?>

                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                        </ul>
                        <div>
                            <h3><?php echo e(__('index.ourServices')); ?></h3>
                            <p><?php echo e($data['service_des_' . $lang]); ?>

                            </p>
                        </div>

                    </div>

                </div>
                <div class="col-md-6 service-content" data-aos="zoom-in" data-aos-duration="1000">

                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="e<?php echo e($service->id); ?>">
                            <div class="service-text-content" data-aos="zoom-out" data-aos-delay="900"
                                data-aos-duration="800">
                                <h4><?php echo e($service['title_' . $lang]); ?></h4>
                                <?php echo $service['description_' . $lang]; ?>

                                
                            </div>
                            <div class="service-image-content">
                                <img width="270px" height="225px" src="<?php echo e(Voyager::image($service->image)); ?>"
                                    alt="<?php echo e($service['title_' . $lang]); ?>">
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </div>
            </div>
        </div>
    </section>
    

    
    <section class="our-goals">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 goals">
                    <div class="row">

                        <?php $__currentLoopData = $goals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $goal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-6 goal" data-aos="fade-up" data-aos-duration="1000">
                                <span class="goal-number"><?php echo e($index++); ?></span>
                                <p><?php echo e($goal['goal_' . $lang]); ?></p>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </div>
                    <h3 data-aos="zoom-out" data-aos-duration="1000"><?php echo e(__('index.ourGoals')); ?></h3>

                </div>
                <div class="col-12 col-lg-4 goals-image-content" data-aos="zoom-in" data-aos-duration="1000">
                    <img src="<?php echo e(Voyager::image($data->goals_image)); ?>" alt="">
                </div>
            </div>
        </div>
    </section>
    
    

    <?php
    $num = count($friends) + 4;
    $first_stop = $num / 3;
    $second_stop = $first_stop * 2 - 2;
    $third_stop = $num ;

    $index = 0;
    ?>

    <section class="success-partners">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 success-partners-title" data-aos="zoom-in" data-aos-duration="1000">
                    <h3><?php echo e(__('index.partners')); ?></h3>
                </div>
                <span class="partners-logos-design"></span>
                <div class="col-12 col-lg-6 partners-logos" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="partners-logos-column column-1">
                        <?php while($index < $first_stop): ?>
                                <?php if(isset($friends[$index])): ?>
                                    <img src="<?php echo e(Voyager::image($friends[$index]->image)); ?>"
                                        alt="<?php echo e($friends[$index]['name_' . $lang]); ?>">
                                <?php endif; ?>
                                <?php
                                    $index++;
                                ?>
                            <?php endwhile; ?>

                    </div>
                    <div class="partners-logos-column column-2">
                        <?php while($index < $second_stop and $index >= $first_stop): ?>
                            <?php if(isset($friends[$index])): ?>
                                <img src="<?php echo e(Voyager::image($friends[$index]->image)); ?>"
                                    alt="<?php echo e($friends[$index]['name_' . $lang]); ?>">
                            <?php endif; ?>
                            <?php
                                $index++;
                            ?>
                        <?php endwhile; ?>


                    </div>
                    <div class="partners-logos-column column-3">
                        <?php while($index < $num and $index >= $second_stop): ?>
                            <?php if(isset($friends[$index])): ?>
                                <img src="<?php echo e(Voyager::image($friends[$index]->image)); ?>"
                                    alt="<?php echo e($friends[$index]['name_' . $lang]); ?>">
                            <?php endif; ?>
                            <?php
                                $index++;
                            ?>
                        <?php endwhile; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="contact-us" id="contact_us">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 form-content" data-aos="fade-up" data-aos-duration="1000">
                    <h3><?php echo e(__('index.question')); ?></h3>
                    <p><?php echo e(__('index.fill')); ?></p>
                    <form action="contact" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="input-field">
                            <label for="name"><?php echo e(__('index.fullname')); ?></label>
                            <input required type="text" name="name" id="full_name">
                        </div>
                        <div class="input-field">
                            <label for="email"> <?php echo e(__('index.email')); ?></label>
                            <input required type="email" name="email" id="email">
                        </div>
                        <div class="input-field">
                            <label for="phone"><?php echo e(__('index.phonenumber')); ?></label>
                            <input required type="number" name="phone" id="phone_number">
                        </div>
                        <div class="input-field">
                            <label for="service"><?php echo e(__('index.service')); ?></label>
                            <select required id="service_id" name="service">
                                <option></option>
                                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($service['title_ar']); ?>"><?php echo e($service['title_' . $lang]); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </select>
                        </div>
                        <div class="input-field">
                            <label for="message"><?php echo e(__('index.message')); ?></label>
                            <textarea required name="message" id="message" cols="30" rows="7"></textarea>
                        </div>
                        <div class="input-field">
                            <input type="submit" value="<?php echo e(__('index.send')); ?>">
                        </div>

                    </form>
                </div>
                <div class="col-md-6 contact-image-content" data-aos="zoom-out" data-aos-duration="1000">
                    <img src="<?php echo e(Voyager::image($data->form_image)); ?>" alt="">
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="contact-info">
        <div class="container">
            <div class="row">
                <div class="col-md-5 contact-info-text-content" data-aos="zoom-in" data-aos-duration="1000">
                    <h3><?php echo e(__('index.stillContact')); ?></h3>
                    <p class="contact-p">
                        <?php echo e(__('index.ready')); ?>

                    </p>
                    <span><?php echo e(__('index.headquarters')); ?></span>
                    <div class="info">
                        <div class="emails-content">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <div class="emails">
                                <p><?php echo e($data['mail_1']); ?></p>
                                <p><?php echo e($data['mail_2']); ?></p>

                            </div>
                        </div>


                        <div class="location-content">
                            <i class="fa fa-thumbtack" aria-hidden="true"></i>
                            <div class="location">
                                <p><?php echo e($data['location_' . $lang]); ?></p>

                            </div>
                        </div>
                        <div class="phone-numbers-content">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <div class="phone-numbers">
                                <p><?php echo e($data['phone_1']); ?></p>
                                <p><?php echo e($data['phone_2']); ?></p>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-7 map" data-aos="zoom-out" data-aos-duration="1000">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4436.563288335262!2d-76.74920380408464!3d39.19409239099808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7e1913f4b4fdb%3A0x18a1a674d9c0d7ad!2s7184%20Troy%20Hill%20Dr%2C%20Elkridge%2C%20MD%2021075%2C%20USA!5e0!3m2!1sen!2sro!4v1573996589257!5m2!1sen!2sro"
                        frameborder="0" style="border:0; width:100%" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ali Taha\Desktop\Coding\Laravel Projects\hadq\resources\views/welcome.blade.php ENDPATH**/ ?>