<?php include '../includes/header.php'; ?>

<?php
$destination = $_POST['destination'] ?? '';
$date = $_POST['date'] ?? '';
$budget = $_POST['budget'] ?? '';
$style = $_POST['style'] ?? '';
?>

<div class="min-h-screen p-4">
  <div class="max-w-3xl mx-auto">

    <h2 class="text-2xl font-bold mb-4">
      Trip to <?php echo htmlspecialchars($destination); ?>
    </h2>

    <!-- Tabs -->
    <div class="flex gap-2 mb-4">
      <button onclick="showTab('itinerary')" class="tab-btn bg-indigo-600 text-white px-4 py-2 rounded-lg">Itinerary</button>
      <button onclick="showTab('budget')" class="tab-btn bg-white border px-4 py-2 rounded-lg">Budget</button>
      <button onclick="showTab('places')" class="tab-btn bg-white border px-4 py-2 rounded-lg">Places</button>
      <button onclick="showTab('checklist')" class="tab-btn bg-white border px-4 py-2 rounded-lg">Checklist</button>
    </div>

    <!-- Content -->
    <div class="bg-white p-6 rounded-2xl shadow">
      <!-- Loading Spinner for AI -->
      <div id="loading" class="text-center animate-pulse py-4 hidden">
        Generating your travel plan...
      </div>

      <div id="itinerary">
        <!-- AI itinerary cards example -->
        <div class="bg-gray-100 p-4 rounded-xl mb-4 text-center text-gray-500">
          AI itinerary will appear here...
        </div>
      </div>
      <div id="budget" class="hidden">Budget breakdown...</div>
      <div id="places" class="hidden">Underrated & overrated places...</div>
      <div id="checklist" class="hidden">Checklist...</div>
    </div>

  </div>
</div>

<script>
function showTab(tab) {
  document.querySelectorAll('#itinerary, #budget, #places, #checklist')
    .forEach(el => el.classList.add('hidden'));

  document.getElementById(tab).classList.remove('hidden');
  
  // reset tab styles
  document.querySelectorAll('.tab-btn').forEach(btn => {
    btn.classList.remove('bg-indigo-600', 'text-white');
    btn.classList.add('bg-white', 'border');
  });

  // add active style to clicked tab
  const activeBtn = Array.from(document.querySelectorAll('.tab-btn'))
    .find(btn => btn.getAttribute('onclick').includes(tab));
  if(activeBtn) {
    activeBtn.classList.add('bg-indigo-600', 'text-white');
    activeBtn.classList.remove('bg-white', 'border');
  }
}
</script>

<?php include '../includes/footer.php'; ?>
