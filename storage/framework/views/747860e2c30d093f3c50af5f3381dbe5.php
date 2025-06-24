

<?php $__env->startSection('title', 'Edit Halaman: ' . ($page->title ?? 'Tidak Ditemukan') . ' - Admin Dashboard'); ?>

<?php $__env->startSection('content'); ?>
    <div class="py-3">
        <h1>Edit Halaman: <?php echo e($page->title ?? 'Tidak Ditemukan'); ?></h1>

        <?php if(session('success')): ?>
            <div class="alert alert-success mt-3">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <?php if(session('error')): ?>
            <div class="alert alert-danger mt-3">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>

        <div class="card shadow-sm mt-4">
            <div class="card-header bg-dark text-white">
                Formulir Edit Halaman
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('admin.pages.update', $page->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <div class="mb-3">
                        <label for="title" class="form-label">Judul Halaman</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?php echo e(old('title', $page->title)); ?>" required>
                        <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger mt-1"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug (URL)</label>
                        <input type="text" class="form-control" id="slug" name="slug" value="<?php echo e(old('slug', $page->slug)); ?>" required>
                        <?php $__errorArgs = ['slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger mt-1"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <small class="form-text text-muted">Contoh: 'beranda', 'tentang', 'kontak'. Slug harus unik.</small>
                    </div>

                    <div class="mb-3">
                        <label for="hero_title" class="form-label">Judul Hero (Untuk Beranda)</label>
                        <input type="text" class="form-control" id="hero_title" name="hero_title" value="<?php echo e(old('hero_title', $page->hero_title)); ?>">
                        <?php $__errorArgs = ['hero_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger mt-1"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <small class="form-text text-muted">Judul utama di bagian atas halaman beranda.</small>
                    </div>

                    ---
                    
                    <?php if($page->slug == 'beranda'): ?>
                        <h4 class="mb-3">Konten Spesifik Halaman Beranda</h4>

                        <div class="mb-3">
                            <label for="homepage_about_section_text" class="form-label">Teks Bagian Tentang Kami (Beranda)</label>
                            <textarea class="form-control" id="homepage_about_section_text" name="homepage_about_section_text" rows="5"><?php echo e(old('homepage_about_section_text', $page->homepage_about_section_text)); ?></textarea>
                            <?php $__errorArgs = ['homepage_about_section_text'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger mt-1"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <small class="form-text text-muted">Paragraf utama di bagian "Tentang Kami" pada beranda.</small>
                        </div>

                        <div class="mb-3">
                            <label for="homepage_services_section_text" class="form-label">Teks Bagian Layanan Kami (Beranda)</label>
                            <textarea class="form-control" id="homepage_services_section_text" name="homepage_services_section_text" rows="5"><?php echo e(old('homepage_services_section_text', $page->homepage_services_section_text)); ?></textarea>
                            <?php $__errorArgs = ['homepage_services_section_text'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger mt-1"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <small class="form-text text-muted">Paragraf utama di bagian "Layanan Kami" pada beranda.</small>
                        </div>
                    <?php endif; ?>

                    ---
                    
                    <?php if($page->slug == 'tentang'): ?>
                        <h4 class="mb-3">Konten Spesifik Halaman Tentang Kami</h4>

                        <div class="mb-3">
                            <label for="vision_title" class="form-label">Judul Visi</label>
                            <input type="text" class="form-control" id="vision_title" name="vision_title" value="<?php echo e(old('vision_title', $page->vision_title)); ?>">
                            <?php $__errorArgs = ['vision_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger mt-1"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="mb-3">
                            <label for="vision_body" class="form-label">Isi Visi</label>
                            <textarea class="form-control" id="vision_body" name="vision_body" rows="3"><?php echo e(old('vision_body', $page->vision_body)); ?></textarea>
                            <?php $__errorArgs = ['vision_body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger mt-1"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="mb-3">
                            <label for="mission_title" class="form-label">Judul Misi</label>
                            <input type="text" class="form-control" id="mission_title" name="mission_title" value="<?php echo e(old('mission_title', $page->mission_title)); ?>">
                            <?php $__errorArgs = ['mission_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger mt-1"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="mb-3">
                            <label for="mission_body" class="form-label">Isi Misi</label>
                            <textarea class="form-control" id="mission_body" name="mission_body" rows="3"><?php echo e(old('mission_body', $page->mission_body)); ?></textarea>
                            <?php $__errorArgs = ['mission_body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger mt-1"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="mb-3">
                            <label for="excellence_title" class="form-label">Judul Keunggulan</label>
                            <input type="text" class="form-control" id="excellence_title" name="excellence_title" value="<?php echo e(old('excellence_title', $page->excellence_title)); ?>">
                            <?php $__errorArgs = ['excellence_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger mt-1"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    <?php endif; ?>

                    ---
                    
                    <?php if($page->slug == 'layanan'): ?>
                        <h4 class="mb-3">Konten Spesifik Halaman Layanan Kami</h4>

                        <div class="mb-3">
                            <label for="main_intro_body" class="form-label">Paragraf Pembuka Layanan</label>
                            <textarea class="form-control" id="main_intro_body" name="main_intro_body" rows="5"><?php echo e(old('main_intro_body', $page->main_intro_body)); ?></textarea>
                            <?php $__errorArgs = ['main_intro_body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger mt-1"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <?php for($i = 1; $i <= 3; $i++): ?>
                            <h5 class="mt-4">Kartu Layanan <?php echo e($i); ?></h5>
                            <div class="mb-3">
                                <label for="service_<?php echo e($i); ?>_title" class="form-label">Judul Kartu Layanan <?php echo e($i); ?></label>
                                <input type="text" class="form-control" id="service_<?php echo e($i); ?>_title" name="service_<?php echo e($i); ?>_title" value="<?php echo e(old('service_' . $i . '_title', $page->{'service_' . $i . '_title'})); ?>">
                                <?php $__errorArgs = ['service_' . $i . '_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger mt-1"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="mb-3">
                                <label for="service_<?php echo e($i); ?>_body" class="form-label">Deskripsi Kartu Layanan <?php echo e($i); ?></label>
                                <textarea class="form-control" id="service_<?php echo e($i); ?>_body" name="service_<?php echo e($i); ?>_body" rows="3"><?php echo e(old('service_' . $i . '_body', $page->{'service_' . $i . '_body'})); ?></textarea>
                                <?php $__errorArgs = ['service_' . $i . '_body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger mt-1"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        <?php endfor; ?>
                    <?php endif; ?>

                    ---
                    
                    <?php if($page->slug == 'galeri'): ?>
                        <h4 class="mb-3">Konten Spesifik Halaman Galeri</h4>

                        <div class="mb-3">
                            <label for="gallery_intro_body" class="form-label">Paragraf Pembuka Galeri</label>
                            <textarea class="form-control" id="gallery_intro_body" name="gallery_intro_body" rows="5"><?php echo e(old('gallery_intro_body', $page->gallery_intro_body)); ?></textarea>
                            <?php $__errorArgs = ['gallery_intro_body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger mt-1"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    <?php endif; ?>

                    ---
                    
                    <?php if($page->slug == 'kontak'): ?>
                        <h4 class="mb-3">Konten Spesifik Halaman Kontak Kami</h4>

                        <div class="mb-3">
                            <label for="contact_overlay_text" class="form-label">Teks Overlay Hero</label>
                            <input type="text" class="form-control" id="contact_overlay_text" name="contact_overlay_text" value="<?php echo e(old('contact_overlay_text', $page->contact_overlay_text)); ?>">
                            <?php $__errorArgs = ['contact_overlay_text'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger mt-1"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <small class="form-text text-muted">Teks singkat di atas gambar hero halaman Kontak.</small>
                        </div>

                        <div class="mb-3">
                            <label for="contact_title" class="form-label">Judul Utama Kontak</label>
                            <input type="text" class="form-control" id="contact_title" name="contact_title" value="<?php echo e(old('contact_title', $page->contact_title)); ?>">
                            <?php $__errorArgs = ['contact_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger mt-1"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <h5 class="mt-4">Info Kontak (Telepon)</h5>
                        <div class="mb-3">
                            <label for="contact_phone" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" id="contact_phone" name="contact_phone" value="<?php echo e(old('contact_phone', $page->contact_phone)); ?>">
                            <?php $__errorArgs = ['contact_phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger mt-1"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <h5 class="mt-4">Info Kontak (Lokasi)</h5>
                        <div class="mb-3">
                            <label for="contact_location_title" class="form-label">Judul Lokasi</label>
                            <input type="text" class="form-control" id="contact_location_title" name="contact_location_title" value="<?php echo e(old('contact_location_title', $page->contact_location_title)); ?>">
                            <?php $__errorArgs = ['contact_location_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger mt-1"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="mb-3">
                            <label for="contact_location_body" class="form-label">Alamat Lengkap</label>
                            <textarea class="form-control" id="contact_location_body" name="contact_location_body" rows="3"><?php echo e(old('contact_location_body', $page->contact_location_body)); ?></textarea>
                            <?php $__errorArgs = ['contact_location_body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger mt-1"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <h5 class="mt-4">Info Kontak (Email)</h5>
                        <div class="mb-3">
                            <label for="contact_email_title" class="form-label">Judul Email</label>
                            <input type="text" class="form-control" id="contact_email_title" name="contact_email_title" value="<?php echo e(old('contact_email_title', $page->contact_email_title)); ?>">
                            <?php $__errorArgs = ['contact_email_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger mt-1"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="mb-3">
                            <label for="contact_email_address" class="form-label">Alamat Email</label>
                            <input type="email" class="form-control" id="contact_email_address" name="contact_email_address" value="<?php echo e(old('contact_email_address', $page->contact_email_address)); ?>">
                            <?php $__errorArgs = ['contact_email_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger mt-1"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="mb-3">
                            <label for="contact_whatsapp_number" class="form-label">Nomor WhatsApp (untuk Tombol)</label>
                            <input type="text" class="form-control" id="contact_whatsapp_number" name="contact_whatsapp_number" value="<?php echo e(old('contact_whatsapp_number', $page->contact_whatsapp_number)); ?>">
                            <?php $__errorArgs = ['contact_whatsapp_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger mt-1"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <small class="form-text text-muted">Contoh: +6287812345678 (gunakan format internasional).</small>
                        </div>
                    <?php endif; ?>

                    ---
                    
                    <?php if($page->slug == 'faq'): ?>
                        <h4 class="mb-3">Konten Spesifik Halaman FAQ</h4>

                        <div class="mb-3">
                            <label for="faq_main_title" class="form-label">Judul Utama FAQ</label>
                            <input type="text" class="form-control" id="faq_main_title" name="faq_main_title" value="<?php echo e(old('faq_main_title', $page->faq_main_title)); ?>">
                            <?php $__errorArgs = ['faq_main_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger mt-1"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <?php for($i = 1; $i <= 5; $i++): ?> 
                            <h5 class="mt-4">Item FAQ <?php echo e($i); ?></h5>
                            <div class="mb-3">
                                <label for="faq_<?php echo e($i); ?>_question" class="form-label">Pertanyaan <?php echo e($i); ?></label>
                                <input type="text" class="form-control" id="faq_<?php echo e($i); ?>_question" name="faq_<?php echo e($i); ?>_question" value="<?php echo e(old('faq_' . $i . '_question', $page->{'faq_' . $i . '_question'})); ?>">
                                <?php $__errorArgs = ['faq_' . $i . '_question'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger mt-1"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="mb-3">
                                <label for="faq_<?php echo e($i); ?>_answer" class="form-label">Jawaban <?php echo e($i); ?></label>
                                <textarea class="form-control" id="faq_<?php echo e($i); ?>_answer" name="faq_<?php echo e($i); ?>_answer" rows="3"><?php echo e(old('faq_' . $i . '_answer', $page->{'faq_' . $i . '_answer'})); ?></textarea>
                                <?php $__errorArgs = ['faq_' . $i . '_answer'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger mt-1"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        <?php endfor; ?>
                    <?php endif; ?>

                    ---
                    <div class="mb-3">
                        <label for="body" class="form-label">Konten Halaman (Utama)</label>
                        <textarea class="form-control" id="body" name="body" rows="10"><?php echo e(old('body', $page->body)); ?></textarea>
                        <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger mt-1"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <small class="form-text text-muted">Isi utama halaman ini. Anda bisa menggunakan HTML di sini.</small>
                    </div>

                    <button type="submit" class="btn btn-success mt-3">Simpan Perubahan</button>
                    <a href="<?php echo e(route('admin.pages.index')); ?>" class="btn btn-secondary mt-3">Batal</a>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    
    <script>
        // Contoh inisialisasi CKEditor jika Anda memiliki ckeditor.js
        // if (typeof CKEDITOR !== 'undefined') {
        //     CKEDITOR.replace('body');
        // }
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin_app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\JOKI\cobadb\cvadmin\resources\views/admin/pages/edit.blade.php ENDPATH**/ ?>