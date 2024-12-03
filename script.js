
function toggleLike(button, countId) { const isLiked = button.classList.toggle('liked'); const likeCountElement = document.getElementById(countId); 
let likeCount = parseInt(likeCountElement.innerText); likeCount = isLiked ? likeCount + 1 : likeCount - 1; likeCountElement.innerText = likeCount; }



<script type="application/ld+json"> { "@context": "https://schema.org", "@type": "WebSite", "name": "E-Business24", "url": "https://onlinebusiness24.pro", "potentialAction": { "@type": "SearchAction", "target": "https://onlinebusiness24.pro/search?q={search_term_string}", "query-input": "required name=search_term_string" } }
</script>