<template>
  <section class="contact-form-section" id="contact">
    <hr role="separator" />
    <h2 class="reveal">Contact</h2>
    <form
      action="https://formsubmit.co/2007080c2cf8bd2ebb68506e7aa98c5f"
      method="POST"
      enctype="multipart/form-data"
    >
      <!-- Email invisibility -->
      <div class="grid-container contact-form reveal">
        <div class="grid-item">
          <label for="email">Email * </label>
          <input
            type="email"
            id="email"
            name="Email"
            placeholder=""
            required
            autocomplete="email"
          />
          <label for="name">Name *</label>
          <input required type="text" id="name" name="Name" placeholder="" autocomplete="name" />
        </div>
        <div class="grid-item">
          <label for="subject">Subject * </label>
          <input type="text" id="subject" name="_subject" required />
          <label for="company">Company (optional)</label>
          <input type="text" id="company" name="Company" autocomplete="work" />
        </div>
      </div>
      <div class="reveal">
        <label for="message">Message * </label>
        <textarea minlength="10" name="Message" rows="7" id="message" required></textarea>

        <!-- Redirect to the success page -->
      </div>
      <input type="hidden" name="_captcha" value="false" /><!-- Spam captcha deactivation -->
      <input
        type="hidden"
        name="_next"
        value="https://adamsochorec.github.io/adamsochorec/success"
      />
      <Button
        variant="outlined"
        class="reveal"
        icon="pi pi-arrow-right"
        severity="contrast"
        type="submit"
        label="Submit"
      />
    </form>
  </section>
</template>
<style lang="postcss" scoped>
.grid-item:nth-child(odd) {
  margin: 0 1rem 0 0;
}
.grid-item:nth-child(even) {
  margin: 0 0 0 1rem;
}
input,
select,
textarea {
  border: none;
  border-radius: var(--border-radius-1);
  padding: 0.8rem;
  width: 100%;
  margin-top: var(--grid-gap-1);
  margin-bottom: var(--grid-gap-1);
}

input,
select,
textarea,
::placeholder {
  color: white;
  font-family: 'SF Pro', sans-serif;
  font-optical-sizing: auto;
  font-weight: 100;
  font-style: normal;
  font-size: var(--fontsize-6);
  font-weight: var(--paragraph-weight);
  line-height: 1;
}
input,
select,
textarea {
  background: rgba(var(--grey-color), 0.7);
  border: none;
}
input:focus,
select:focus,
textarea:focus {
  outline: none;
  -webkit-box-shadow: var(--box-shadow-2);
  box-shadow: var(--box-shadow-2);
  -webkit-transition: var(--transition-1);
  -o-transition: var(--transition-1);
  transition: var(--transition-1);
}
</style>
