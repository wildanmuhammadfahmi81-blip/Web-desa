document.addEventListener("DOMContentLoaded", function () {

  /* ================= DROPDOWN HOVER ================= */
  const dropdowns = document.querySelectorAll(".dropdown");

  dropdowns.forEach(dropdown => {
    const menu = dropdown.querySelector(".dropdown-menu");
    if (!menu) return;

    dropdown.addEventListener("mouseenter", () => {
      menu.style.display = "block";
    });

    dropdown.addEventListener("mouseleave", () => {
      menu.style.display = "none";
    });
  });

  /* ================= FILTER AGENDA ================= */
  document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', () => {

      document.querySelectorAll('.filter-btn')
        .forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filter = btn.dataset.filter;

      document.querySelectorAll('.agenda-item').forEach(item => {
        if (filter === 'all' || item.classList.contains(filter)) {
          item.style.display = 'block';
        } else {
          item.style.display = 'none';
        }
      });

    });
  });

  /* ================= SEARCH PENGUMUMAN ================= */
  const searchInput = document.getElementById("searchInput");

if (searchInput) {
  searchInput.addEventListener("input", function () {
    const keyword = this.value.toLowerCase().trim();
    const cards = document.querySelectorAll(".pengumuman-card");

    cards.forEach(card => {
      const text = card.innerText.toLowerCase();
      const col = card.closest(".col-md-4");

      if (text.includes(keyword)) {
        col.style.display = "block";
      } else {
        col.style.display = "none";
      }
    });
  });
}

cards.forEach(card => {
  let originalText = card.dataset.original;
  if (!originalText) {
    card.dataset.original = card.innerHTML;
    originalText = card.innerHTML;
  }

  if (keyword === "") {
    card.innerHTML = originalText;
    col.style.display = "block";
    return;
  }

  if (card.innerText.toLowerCase().includes(keyword)) {
    col.style.display = "block";
    const regex = new RegExp(`(${keyword})`, "gi");
    card.innerHTML = originalText.replace(regex, "<mark>$1</mark>");
  } else {
    col.style.display = "none";
  }
});


  /* ================= COUNTER ANIMATION ================= */
  const counters = document.querySelectorAll('.stat-number');

  counters.forEach(counter => {
    const target = +counter.getAttribute('data-target');
    let count = 0;
    const speed = 50;

    const updateCount = () => {
      const increment = target / speed;
      if (count < target) {
        count += increment;
        counter.innerText = Math.ceil(count);
        setTimeout(updateCount, 30);
      } else {
        counter.innerText = target;
      }
    };

    updateCount();
  });

});

/* ================= FORM ASPIRASI ================= */
function kirimAspirasi() {
  Swal.fire({
    title: "Aspirasi Terkirim!",
    text: "Terima kasih! Aspirasi Anda sudah disimpan.",
    icon: "success",
    confirmButtonText: "Kembali ke halaman utama",
  }).then(() => {
    document.getElementById("formAspirasi").reset();
  });

  return false;
}
