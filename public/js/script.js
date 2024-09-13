// script.js

document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('skillsModal');
    const openModalBtn = document.getElementById('openModalBtn');
    const closeModal = document.querySelector('.close');
    const saveSkillBtn = document.getElementById('saveSkillBtn');
    const skillsContainer = document.querySelector('.container-item-skill');

    // Open Modal
    openModalBtn.addEventListener('click', function () {
        modal.style.display = 'block';
    });

    // Close Modal
    closeModal.addEventListener('click', function () {
        modal.style.display = 'none';
    });

    // Close Modal when clicked outside of it
    window.addEventListener('click', function (event) {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });

    // Save new skill and append to the skills container
    saveSkillBtn.addEventListener('click', function () {
        const skillName = document.getElementById('skillName').value;
        const skillValue = document.getElementById('skillValue').value;

        if (skillName && skillValue) {
            // Create new skill elements
            const skillDiv = document.createElement('div');
            skillDiv.classList.add('skill');

            const label = document.createElement('label');
            label.textContent = skillName + ':';
            const progress = document.createElement('progress');
            progress.value = skillValue;
            progress.max = 100;

            // Append elements to the skill div and container
            skillsContainer.appendChild(label);
            skillsContainer.appendChild(progress);

            // Clear input fields
            document.getElementById('skillName').value = '';
            document.getElementById('skillValue').value = '';

            // Close modal
            modal.style.display = 'none';
        } else {
            alert('Please enter a valid skill name and performance.');
        }
    });
});
