<?php include '../includes/header.php'; ?>

<div class="min-h-screen flex items-center justify-center px-4">
  <form action="result.php" method="POST"
        class="bg-white p-6 rounded-2xl shadow-lg w-full max-w-md">

    <h2 class="text-2xl font-semibold mb-4">Create Your Trip</h2>

    <input name="destination" type="text"
           placeholder="Destination"
           class="w-full mb-3 p-3 border rounded-lg" required>

    <input name="date" type="date"
           class="w-full mb-3 p-3 border rounded-lg" required>

    <input name="budget" type="number"
           placeholder="Budget (PHP)"
           class="w-full mb-3 p-3 border rounded-lg" required>

    <select name="style"
            class="w-full mb-4 p-3 border rounded-lg">
      <option>Budget Travel</option>
      <option>Luxury</option>
      <option>Adventure</option>
      <option>Relaxation</option>
    </select>

    <button type="submit"
      class="w-full bg-indigo-600 text-white py-3 rounded-xl hover:bg-indigo-700">
      Generate Plan
    </button>
  </form>
</div>

<?php include '../includes/footer.php'; ?>
