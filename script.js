document.onreadystatechange = function () {
  if (document.readyState !== "complete") {
    const processRows = document.querySelectorAll(".process-row-wrap");
    
    const observer = new IntersectionObserver((processRows) => {
      processRows.forEach((processRow) => {
        if (processRow.isIntersecting) {
          jQuery(".process-row-wrap").removeClass("visible");
          processRow.target.classList.add("visible");
        } else {
          processRow.target.classList.remove("visible");
        }
      });
    },
    {
      //threshold: [0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8, 0.9, 1.0],
      threshold: 0.35,
    }
    );
    processRows.forEach((processRow) => observer.observe(processRow));
    
    /* Logos Observer */
    const logosFold = document.getElementById("logos-unfold-row");
    const logosObserver = new IntersectionObserver(
    (items) => {
    items.forEach((item) => {
      if (item.isIntersecting) {
        item.target.classList.add("lg-visible");
      } else {
        item.target.classList.remove("lg-visible");
      }
      });
    },
    {
      threshold: 0.3,
    }
    );
    logosObserver.observe(logosFold);
  }
};
