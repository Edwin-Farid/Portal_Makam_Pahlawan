   <section class="faq" id="jasa">
       <div class="container">
           <div class="section-title">
               <h2>Jasa-jasa</h2>
           </div>

           <ul class="faq-list">
               <?php $no = 1;
                foreach ($jasa as $row) : ?>
                   <li>
                       <a data-bs-toggle="collapse" class="collapsed" data-bs-target="<?= '#faq' . (int)$no++; ?>"><?= $row['judul']; ?> <i class="bx bx-down-arrow-alt icon-show"></i><i class="bx bx-x icon-close"></i></a>
                       <div id="<?= 'faq' . (int)$no -1; ?>" class="collapse" data-bs-parent=".faq-list">
                           <p>
                               <?= $row['deskripsi']; ?>
                           </p>
                       </div>
                   </li>
               <?php endforeach; ?>
           </ul>
       </div>
   </section>