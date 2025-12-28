document.addEventListener("DOMContentLoaded", function () {
  const dropdowns = document.querySelectorAll(".dropdown");

  dropdowns.forEach(dropdown => {
    dropdown.addEventListener("mouseenter", () => {
      dropdown.querySelector(".dropdown-menu").style.display = "block";
    });

    dropdown.addEventListener("mouseleave", () => {
      dropdown.querySelector(".dropdown-menu").style.display = "none";
    });
  });
});

document.querySelectorAll('.filter-btn').forEach(btn => {
  btn.addEventListener('click', () => {

    // aktifkan tombol
    document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
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
