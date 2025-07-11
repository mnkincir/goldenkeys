<form class="card">
    <h2 class="font-bold text-gold text-center text-lg lg:text-2xl">GOLDEN KEYS</h2>
    <h2 class="font-bold text-gold mb-8 text-center text-lg lg:text-2xl">Franchise Başvuru Formu</h2>
    <div class="grid grid-cols-1 gap-4">
        <div class="form-control">
            <label class="label"><span class="label-text">Adınız</span></label>
            <input type="text" name="firstName" placeholder="Adınız" class="input input-bordered w-full input-error" required>
            <div class="text-red-500 text-sm text-left">Adınızı giriniz</div>
        </div>
        <div class="form-control">
            <label class="label"><span class="label-text">Soyadınız</span></label>
            <input type="text" name="lastName" placeholder="Soyadınız" class="input input-bordered w-full" required>
        </div>
        <div class="form-control">
            <label class="label"><span class="label-text">Telefon Numarası</span></label>
            <input type="tel" name="phone" placeholder="Telefon Numaranızı Giriniz" maxlength="13" class="input input-bordered w-full" required autocomplete="tel">
        </div>
        <div class="form-control">
            <label class="label"><span class="label-text">E-Posta</span></label>
            <input type="email" name="email" placeholder="E-posta Adresinizi Giriniz" class="input input-bordered w-full" required>
        </div>
        <div class="form-control">
            <label class="label"><span class="label-text">Doğum Tarihi</span></label>
            <input type="date" name="birthDate" class="input input-bordered w-full" required>
        </div>
        <div class="form-control">
            <label class="label"><span class="label-text">Eğitim Durumu</span></label>
            <select name="education" class="select select-bordered w-full" required>
                <option value="">Eğitim Durumunuzu Seçiniz</option>
                <option value="İlkokul">İlkokul</option>
                <option value="Ortaokul">Ortaokul</option>
                <option value="Lise">Lise</option>
                <option value="Üniversite">Üniversite</option>
                <option value="Yüksek Lisans/Doktora">Yüksek Lisans/Doktora</option>
            </select>
        </div>
        <div class="form-control">
            <label class="label"><span class="label-text">İl</span></label>
            <input type="text" name="city" placeholder="İl" class="input input-bordered w-full" required>
        </div>
        <div class="form-control">
            <label class="label"><span class="label-text">İlçe</span></label>
            <input type="text" name="district" placeholder="İlçe" class="input input-bordered w-full" required>
        </div>
        <div class="form-control">
            <label class="label"><span class="label-text">Mahalle/Sokak</span></label>
            <input type="text" name="street" placeholder="Mahalle/Sokak" class="input input-bordered w-full" required>
        </div>
        <div class="form-control">
            <label class="label"><span class="label-text">Sektör Deneyim Süreniz (varsa)</span></label>
            <input type="text" name="sectorExperience" placeholder="Sektör Deneyim Süreniz (Örn.: 1,5 Yıl)" class="input input-bordered w-full">
        </div>
        <div class="form-control">
            <label class="label"><span class="label-text">Marka Deneyim Süreniz (varsa)</span></label>
            <input type="text" name="brandExperience" placeholder="Marka Deneyim Süreniz (Örn.: 1,5 Yıl)" class="input input-bordered w-full">
        </div>
        <div class="form-control">
            <label class="label"><span class="label-text">Sizin için bir franchise başarısı için en önemlisi hangisi</span></label>
            <select name="importantFactor" class="select select-bordered w-full" required>
                <option value="">Seçiniz</option>
                <option value="Eğitim Desteği">Eğitim Desteği</option>
                <option value="CRM Alt Yapısı">CRM Alt Yapısı</option>
                <option value="Kurumsal Alt Yapı">Kurumsal Alt Yapı</option>
                <option value="Dijital Pazarlama">Dijital Pazarlama</option>
                <option value="Ekip Kurulum Desteği">Ekip Kurulum Desteği</option>
            </select>
        </div>
        <div class="form-control">
            <label class="label"><span class="label-text">Bu gayrimenkul franchise yatırımı için ayırdığınız bir bütçe var mı?</span></label>
            <select name="budget" class="select select-bordered w-full" required>
                <option value="">Seçiniz</option>
                <option value="1 milyon-3 milyon">1 milyon-3 milyon</option>
                <option value="3-milyon - 5 milyon">3-milyon - 5 milyon</option>
                <option value="5 milyon - 8 milyon">5 milyon - 8 milyon</option>
                <option value="Cevap vermek istemiyorum">Cevap vermek istemiyorum</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary w-full mt-6"><span>Başvuruyu Gönder</span></button>
    </div>
</form>