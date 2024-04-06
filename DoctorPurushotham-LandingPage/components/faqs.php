

<?php 

$array=[
    ["Who is a Surgical Oncologist?","A Surgical Oncologist is a doctor who specializes in using surgery to treat cancer, removing tumors and cancerous tissues while aiming to preserve healthy tissue and function."],
    ["Why is Dr. Purushotham the best surgical oncologist in Hyderabad?","With over 10+ years of experience and 4000+ cancer surgeries, Dr. Puroshotham is considered the best surgical oncologist in hyderabad."],
    ["What types of cancers are treated using surgery?","Various types of cancers are treated using surgery depending on the stage, but the most common ones include breast cancer surgery, oral cancer surgery, lung cancer, and kidney cancer."],
    ["Where can I find a Surgical Oncologist near me?","We have multiple centers where we provide the best cancer treatment and surgical options all around Hyderabad, in Kukatpally, Tolichowki, Masab Tank, Ameerpet, Erragadda, and Kompally."],
    ["How can I get a free second opinion?","To get a free consultation or a free second opinion, call us at 18001202676 or fill out the form above, and we will get back to you with all the details regarding the free second opinion."],
    ["When is cancer surgery recommended?","Cancer surgery is recommended when the cancer is at an early stage, confined to one area, and can be safely removed, offering the best chance for cure or symptom relief."],
    ["What tests are required before cancer surgery?","Before cancer surgery, patients typically undergo tests such as imaging (PET CT, MRI, Ultrasound scans), biopsy, and blood tests to assess the cancer's extent and the patient's overall health."],
    ["How do I need to prepare for cancer surgery?","To prepare for cancer surgery, patients may need to:  Follow pre-surgery instructions provided by the surgical oncologist, such as fasting before the procedure.  Inform the cancer surgeon about any medications they are taking, including supplements and over-the-counter drugs."]
]
?>
<h1 class="faqs-h1">FAQ’S </h1>
<div class="accordion">
    <?php foreach($array as $details): ?>
    <div class="accordion-item">
        <div class="accordion-title"><span class="arrow">+</span> <?php echo $details[0]; ?></div>
        <div class="accordion-content"><?php echo $details[1]; ?></div>
    </div>
    <?php endforeach; ?>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const accordionItems = document.querySelectorAll('.accordion-item');

  accordionItems.forEach(item => {
    const title = item.querySelector('.accordion-title');
    const arrow = title.querySelector('.arrow');
    const content = item.querySelector('.accordion-content');

    title.addEventListener('click', function() {
      const isOpen = content.style.display === 'block';

      accordionItems.forEach(otherItem => {
        otherItem.querySelector('.accordion-content').style.display = 'none';
        otherItem.querySelector('.arrow').textContent = '+';
        otherItem.querySelector('.accordion-title').style.backgroundColor = '#EEEEEE';
      });

      if (!isOpen) {
        setTimeout(function() {
          content.style.display = 'block';
          arrow.textContent = '-';
          title.style.backgroundColor = '#F0D0DD';
        }, 250); 
      } else {

        content.style.display = 'none';
        arrow.textContent = '+';
        title.style.backgroundColor = '#EEEEEE';
      }
    });
  });
});
</script>
