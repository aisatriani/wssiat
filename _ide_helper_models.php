<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $readNotifications
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $unreadNotifications
 * @method static \Illuminate\Database\Query\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\LokasiDosen
 *
 * @property int $id
 * @property int $nidn
 * @property float $latitude
 * @property float $longitude
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $kabkot
 * @method static \Illuminate\Database\Query\Builder|\App\LokasiDosen whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\LokasiDosen whereNidn($value)
 * @method static \Illuminate\Database\Query\Builder|\App\LokasiDosen whereLatitude($value)
 * @method static \Illuminate\Database\Query\Builder|\App\LokasiDosen whereLongitude($value)
 * @method static \Illuminate\Database\Query\Builder|\App\LokasiDosen whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\LokasiDosen whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\LokasiDosen whereKabkot($value)
 */
	class LokasiDosen extends \Eloquent {}
}

namespace App{
/**
 * App\Fakultas
 *
 * @property int $id
 * @property int $kodefak
 * @property string $fakultas
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Jurusan[] $jurusan
 * @method static \Illuminate\Database\Query\Builder|\App\Fakultas whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fakultas whereKodefak($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fakultas whereFakultas($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fakultas whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Fakultas whereUpdatedAt($value)
 */
	class Fakultas extends \Eloquent {}
}

namespace App{
/**
 * App\Jurusan
 *
 * @property int $id
 * @property string $kodefak
 * @property int $kodejur
 * @property string $jurusan
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Fakultas $fakultas
 * @method static \Illuminate\Database\Query\Builder|\App\Jurusan whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Jurusan whereKodefak($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Jurusan whereKodejur($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Jurusan whereJurusan($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Jurusan whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Jurusan whereUpdatedAt($value)
 */
	class Jurusan extends \Eloquent {}
}

namespace App{
/**
 * App\Prodi
 *
 * @property int $id
 * @property string $kodejur
 * @property int $kodeprodi
 * @property string $prodi
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Jurusan $jurusan
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Mahasiswa[] $mahasiswa
 * @method static \Illuminate\Database\Query\Builder|\App\Prodi whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Prodi whereKodejur($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Prodi whereKodeprodi($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Prodi whereProdi($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Prodi whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Prodi whereUpdatedAt($value)
 */
	class Prodi extends \Eloquent {}
}

namespace App{
/**
 * App\Mahasiswa
 *
 * @property int $id
 * @property int $nim
 * @property string $nama
 * @property string $kelas
 * @property string $dosen_pa_nidn
 * @property string $dosen_pa_nama
 * @property string $kodeprodi
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $angakatan
 * @property string $status
 * @property-read \App\Prodi $prodi
 * @method static \Illuminate\Database\Query\Builder|\App\Mahasiswa whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Mahasiswa whereNim($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Mahasiswa whereNama($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Mahasiswa whereKelas($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Mahasiswa whereDosenPaNidn($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Mahasiswa whereDosenPaNama($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Mahasiswa whereKodeprodi($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Mahasiswa whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Mahasiswa whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Mahasiswa whereAngakatan($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Mahasiswa whereStatus($value)
 */
	class Mahasiswa extends \Eloquent {}
}

namespace App{
/**
 * App\UpdateLokasi
 *
 * @property int $id
 * @property string $nidn
 * @property string $nama
 * @property float $latitude
 * @property float $longitude
 * @property int $active
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\UpdateLokasi whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UpdateLokasi whereNidn($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UpdateLokasi whereNama($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UpdateLokasi whereLatitude($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UpdateLokasi whereLongitude($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UpdateLokasi whereActive($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UpdateLokasi whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\UpdateLokasi whereUpdatedAt($value)
 */
	class UpdateLokasi extends \Eloquent {}
}

namespace App{
/**
 * App\KontrakKrs
 *
 * @property int $id
 * @property string $nim
 * @property string $kodemakul
 * @property string $namamakul
 * @property string $pa
 * @property int $setujui
 * @property string $tahun
 * @property string $semester
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\KontrakKrs whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\KontrakKrs whereNim($value)
 * @method static \Illuminate\Database\Query\Builder|\App\KontrakKrs whereKodemakul($value)
 * @method static \Illuminate\Database\Query\Builder|\App\KontrakKrs whereNamamakul($value)
 * @method static \Illuminate\Database\Query\Builder|\App\KontrakKrs wherePa($value)
 * @method static \Illuminate\Database\Query\Builder|\App\KontrakKrs whereSetujui($value)
 * @method static \Illuminate\Database\Query\Builder|\App\KontrakKrs whereTahun($value)
 * @method static \Illuminate\Database\Query\Builder|\App\KontrakKrs whereSemester($value)
 * @method static \Illuminate\Database\Query\Builder|\App\KontrakKrs whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\KontrakKrs whereUpdatedAt($value)
 */
	class KontrakKrs extends \Eloquent {}
}

