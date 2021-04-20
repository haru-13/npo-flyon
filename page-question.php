<?php get_header(); ?>

<main class="contents">
<h2>あああああああああああああ</h2>
<div class="accordion-single js-acc-single">
  <div class="accordion-single-item js-acc-item">
    <h2 class="accordion-single-title js-acc-single-trigger">質問を入れる</h2>
    <div class="accordion-single-content">
      <p>答え</p>
    </div>
  </div>
  <div class="accordion-single-item js-acc-item">
    <h2 class="accordion-single-title js-acc-single-trigger">質問を入れる</h2>
    <div class="accordion-single-content">
      <p>答え</p>
    </div>
  </div>
  <div class="accordion-single-item js-acc-item">
    <h2 class="accordion-single-title js-acc-single-trigger">質問を入れる</h2>
    <div class="accordion-single-content">
      <p>答え</p>
    </div>
  </div>
  <div class="accordion-single-item js-acc-item">
    <h2 class="accordion-single-title js-acc-single-trigger">質問を入れる</h2>
    <div class="accordion-single-content">
      <p>答え</p>
    </div>
  </div>
<h2>あああああああああああああ</h2>
<div class="accordion-single js-acc-single">
  <div class="accordion-single-item js-acc-item">
    <h2 class="accordion-single-title js-acc-single-trigger">質問を入れる</h2>
    <div class="accordion-single-content">
      <p>答え</p>
    </div>
  </div>
  <div class="accordion-single-item js-acc-item">
    <h2 class="accordion-single-title js-acc-single-trigger">質問を入れる</h2>
    <div class="accordion-single-content">
      <p>答え</p>
    </div>
  </div>
  <div class="accordion-single-item js-acc-item">
    <h2 class="accordion-single-title js-acc-single-trigger">質問を入れる</h2>
    <div class="accordion-single-content">
      <p>答え</p>
    </div>
  </div>
  <div class="accordion-single-item js-acc-item">
    <h2 class="accordion-single-title js-acc-single-trigger">質問を入れる</h2>
    <div class="accordion-single-content">
      <p>答え</p>
    </div>
  </div>

</div>
  
</main>
<script>
    'use strict';
    const accSingleTriggers = document.querySelectorAll('.js-acc-single-trigger');

accSingleTriggers.forEach(trigger => trigger.addEventListener('click', toggleAccordion));

function toggleAccordion() {
    const items = document.querySelectorAll('.js-acc-item');
    const thisItem = this.parentNode;

    items.forEach(item => {
        if (thisItem == item) {
            thisItem.classList.toggle('is-open');
            return;
        }
        item.classList.remove('is-open');
    });
}
</script>
<?php get_footer(); ?>