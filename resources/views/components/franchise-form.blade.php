<form x-data="franchiseForm()" @submit.prevent="submitForm" class="card">
    <h2 class="font-bold text-gold text-center text-lg lg:text-2xl">GOLDEN KEYS</h2>
    <h2 class="font-bold text-gold mb-8 text-center text-lg lg:text-2xl">Franchise Başvuru Formu</h2>
    <div class="grid grid-cols-1 gap-4">
        <div class="form-control">
            <label class="label"><span class="label-text">Adınız</span></label>
            <input type="text" name="firstName" placeholder="Adınız" :class="{'input-error': errors.firstName}" class="input input-bordered w-full" x-model="form.firstName" required>
            <template x-if="errors.firstName">
                <div class="text-red-500 text-sm text-left" x-text="errors.firstName[0]"></div>
            </template>
        </div>
        <div class="form-control">
            <label class="label"><span class="label-text">Soyadınız</span></label>
            <input type="text" name="lastName" placeholder="Soyadınız" :class="{'input-error': errors.lastName}" class="input input-bordered w-full" x-model="form.lastName" required>
            <template x-if="errors.lastName">
                <div class="text-red-500 text-sm text-left" x-text="errors.lastName[0]"></div>
            </template>
        </div>
        <div class="form-control">
            <label class="label"><span class="label-text">Telefon Numarası</span></label>
            <input type="tel" name="phone" placeholder="Telefon Numaranızı Giriniz" maxlength="13" :class="{'input-error': errors.phone}" class="input input-bordered w-full" x-model="form.phone" required autocomplete="tel">
            <template x-if="errors.phone">
                <div class="text-red-500 text-sm text-left" x-text="errors.phone[0]"></div>
            </template>
        </div>
        <div class="form-control">
            <label class="label"><span class="label-text">E-Posta</span></label>
            <input type="email" name="email" placeholder="E-posta Adresinizi Giriniz" :class="{'input-error': errors.email}" class="input input-bordered w-full" x-model="form.email" required>
            <template x-if="errors.email">
                <div class="text-red-500 text-sm text-left" x-text="errors.email[0]"></div>
            </template>
        </div>
        <div class="form-control">
            <label class="label"><span class="label-text">Doğum Tarihi</span></label>
            <input type="date" name="birthDate" :class="{'input-error': errors.birthDate}" class="input input-bordered w-full" x-model="form.birthDate" required>
            <template x-if="errors.birthDate">
                <div class="text-red-500 text-sm text-left" x-text="errors.birthDate[0]"></div>
            </template>
        </div>
        <div class="form-control">
            <label class="label"><span class="label-text">Eğitim Durumu</span></label>
            <select name="education" :class="{'input-error': errors.education}" class="select select-bordered w-full" x-model="form.education" required>
                <option value="">Eğitim Durumunuzu Seçiniz</option>
                <option value="İlkokul">İlkokul</option>
                <option value="Ortaokul">Ortaokul</option>
                <option value="Lise">Lise</option>
                <option value="Üniversite">Üniversite</option>
                <option value="Yüksek Lisans/Doktora">Yüksek Lisans/Doktora</option>
            </select>
            <template x-if="errors.education">
                <div class="text-red-500 text-sm text-left" x-text="errors.education[0]"></div>
            </template>
        </div>
        <div class="form-control">
            <label class="label"><span class="label-text">İl</span></label>
            <input type="text" name="city" placeholder="İl" :class="{'input-error': errors.city}" class="input input-bordered w-full" x-model="form.city" required>
            <template x-if="errors.city">
                <div class="text-red-500 text-sm text-left" x-text="errors.city[0]"></div>
            </template>
        </div>
        <div class="form-control">
            <label class="label"><span class="label-text">İlçe</span></label>
            <input type="text" name="district" placeholder="İlçe" :class="{'input-error': errors.district}" class="input input-bordered w-full" x-model="form.district" required>
            <template x-if="errors.district">
                <div class="text-red-500 text-sm text-left" x-text="errors.district[0]"></div>
            </template>
        </div>
        <div class="form-control">
            <label class="label"><span class="label-text">Mahalle/Sokak</span></label>
            <input type="text" name="street" placeholder="Mahalle/Sokak" :class="{'input-error': errors.street}" class="input input-bordered w-full" x-model="form.street" required>
            <template x-if="errors.street">
                <div class="text-red-500 text-sm text-left" x-text="errors.street[0]"></div>
            </template>
        </div>
        <div class="form-control">
            <label class="label"><span class="label-text">Sektör Deneyim Süreniz (varsa)</span></label>
            <input type="text" name="sectorExperience" placeholder="Sektör Deneyim Süreniz (Örn.: 1,5 Yıl)" :class="{'input-error': errors.sectorExperience}" class="input input-bordered w-full" x-model="form.sectorExperience">
            <template x-if="errors.sectorExperience">
                <div class="text-red-500 text-sm text-left" x-text="errors.sectorExperience[0]"></div>
            </template>
        </div>
        <div class="form-control">
            <label class="label"><span class="label-text">Marka Deneyim Süreniz (varsa)</span></label>
            <input type="text" name="brandExperience" placeholder="Marka Deneyim Süreniz (Örn.: 1,5 Yıl)" :class="{'input-error': errors.brandExperience}" class="input input-bordered w-full" x-model="form.brandExperience">
            <template x-if="errors.brandExperience">
                <div class="text-red-500 text-sm text-left" x-text="errors.brandExperience[0]"></div>
            </template>
        </div>
        <div class="form-control">
            <label class="label"><span class="label-text">Sizin için bir franchise başarısı için en önemlisi hangisi</span></label>
            <select name="importantFactor" :class="{'input-error': errors.importantFactor}" class="select select-bordered w-full" x-model="form.importantFactor" required>
                <option value="">Seçiniz</option>
                <option value="Eğitim Desteği">Eğitim Desteği</option>
                <option value="CRM Alt Yapısı">CRM Alt Yapısı</option>
                <option value="Kurumsal Alt Yapı">Kurumsal Alt Yapı</option>
                <option value="Dijital Pazarlama">Dijital Pazarlama</option>
                <option value="Ekip Kurulum Desteği">Ekip Kurulum Desteği</option>
            </select>
            <template x-if="errors.importantFactor">
                <div class="text-red-500 text-sm text-left" x-text="errors.importantFactor[0]"></div>
            </template>
        </div>
        <div class="form-control">
            <label class="label"><span class="label-text">Bu gayrimenkul franchise yatırımı için ayırdığınız bir bütçe var mı?</span></label>
            <select name="budget" :class="{'input-error': errors.budget}" class="select select-bordered w-full" x-model="form.budget" required>
                <option value="">Seçiniz</option>
                <option value="1 milyon-3 milyon">1 milyon-3 milyon</option>
                <option value="3-milyon - 5 milyon">3-milyon - 5 milyon</option>
                <option value="5 milyon - 8 milyon">5 milyon - 8 milyon</option>
                <option value="Cevap vermek istemiyorum">Cevap vermek istemiyorum</option>
            </select>
            <template x-if="errors.budget">
                <div class="text-red-500 text-sm text-left" x-text="errors.budget[0]"></div>
            </template>
        </div>
        <button type="submit" class="btn btn-primary w-full mt-6"><span>Başvuruyu Gönder</span></button>
    </div>
</form>

<script>
function franchiseForm() {
    return {
        form: {
            firstName: '',
            lastName: '',
            phone: '',
            email: '',
            birthDate: '',
            education: '',
            city: '',
            district: '',
            street: '',
            sectorExperience: '',
            brandExperience: '',
            importantFactor: '',
            budget: ''
        },
        errors: {},
        async submitForm() {
            this.errors = {};
            try {
                const response = await axios.post('/forms/franchise-apply', this.form);
                
                window.location.href = '/tesekkurler';
            } catch (error) {
                if (error.response && error.response.status === 422) {
                    this.errors = error.response.data.errors;
                } else {
                    alert('Bir hata oluştu.');
                }
            }
        }
    }
}
</script>