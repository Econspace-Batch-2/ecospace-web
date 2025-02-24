@extends('layout.layout')
@section('content')
    <main class="w-full min-h-[100vh] pb-20 flex items-center justify-start flex-col">
        <h1 class="text-2xl text-black font-bold text-center mb-8">Registration Tutoring Economic Space</h1>

        @include('modules.purchase.components.progress-tracker', [
            'step' => (int) request()->get('step', 1),
        ])
        @include('modules.purchase.components.informasiModal')

        <section class="w-full max-w-[80%]">
            @if (request()->get('step', 1) == 1)
                @include('modules.purchase.sections.universitasAsal')
            @elseif (request()->get('step', 1) == 2)
                @include('modules.purchase.sections.appointlet')
            @elseif (request()->get('step', 1) == 3)
                @include('modules.purchase.sections.data_diri')
            @elseif (request()->get('step', 1) == 4)
                @include('modules.purchase.sections.bukti_pembayaran')
            @elseif (request()->get('step', 1) == 5)
                @include('modules.purchase.sections.wa_group')
            @endif
    
            <div
                class="w-full flex justify-between md:flex-row flex-col items-center max-lg:gap-8 my-10">
                <button
                    class="btn btn-success"
                >
                    <svg
                        width="24" height="24" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18.0755 0.580688C8.19522 0.580688 0.154452 8.32533 0.150968 17.8433C0.148645 20.887 0.975484 23.8576 2.54323 26.474L0 35.4194L9.50284 33.019C12.1462 34.4017 15.0854 35.123 18.0685 35.1209H18.0755C27.9557 35.1209 35.9965 27.3751 36 17.8572C36.0023 13.2469 34.1396 8.90714 30.7544 5.64508C27.3705 2.38185 22.8705 0.58185 18.0755 0.580688ZM18.0755 32.2049H18.0697C15.3964 32.2049 12.7742 31.5128 10.4865 30.2052L9.94065 29.894L4.30374 31.3177L5.80877 26.0222L5.45458 25.4799C3.96686 23.2109 3.17489 20.5565 3.17613 17.8433C3.17961 9.9314 9.864 3.49669 18.0813 3.49669C22.0599 3.49785 25.8004 4.99243 28.6142 7.70404C31.428 10.4157 32.976 14.0215 32.9737 17.856C32.9702 25.7679 26.287 32.2049 18.0743 32.2049H18.0755ZM26.2475 21.4572C25.7992 21.2424 23.5974 20.1984 23.1863 20.0532C22.7764 19.9104 22.4779 19.836 22.1795 20.268C21.8822 20.7 21.0228 21.672 20.7627 21.9589C20.5003 22.2469 20.239 22.2817 19.7907 22.0669C19.3425 21.8509 17.899 21.3957 16.1895 19.9255C14.8575 18.7828 13.9587 17.3706 13.6974 16.9375C13.4361 16.5066 13.6695 16.2732 13.8937 16.0584C14.0946 15.8668 14.3419 15.5555 14.5649 15.3035C14.7879 15.0515 14.8622 14.8715 15.0132 14.5835C15.1618 14.2967 15.0875 14.0435 14.9748 13.8287C14.8622 13.6115 13.968 11.4887 13.5929 10.6258C13.2306 9.78508 12.8613 9.89772 12.5861 9.88379C12.3248 9.87217 12.0275 9.86869 11.7267 9.86869C11.4306 9.86869 10.944 9.97669 10.5329 10.4087C10.123 10.8407 8.96516 11.8835 8.96516 14.0064C8.96516 16.1304 10.5701 18.1812 10.7942 18.4692C11.0183 18.756 13.9529 23.1144 18.4459 24.984C19.5143 25.4265 20.3481 25.6924 20.9996 25.8922C22.0726 26.2208 23.0493 26.1732 23.8204 26.0629C24.6797 25.9386 26.4705 25.02 26.8421 24.0132C27.216 23.0064 27.216 22.1424 27.1045 21.9624C26.9954 21.7824 26.6957 21.6744 26.2475 21.4572Z"
                            fill="white" />
                    </svg>
                    Contact Person
                </button>
                <div class="gap-6 sm:gap-10 flex w-full justify-between md:justify-end">
                    @if (request()->get('step', 1) > 1)
                        <button data-prev-button class="btn btn-outline">
                            Back
                        </button>
                    @else
                    <a href="/tutors/{{$id}}">
                        <button
                            class="btn btn-outline"
                        >
                            View Tutor Details
                        </button>
                    </a>
                    @endif
                    <button data-next-button
                        class="btn btn-primary">
                        @if (request()->get('step', 1) == 5)
                            Submit
                        @else
                            Next
                        @endif
                    </button>
                </div>
            </div>
        </section>


        <input type="hidden" id="currentStep" value="{{ request()->get('step', 1) }}">
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let currentStep = parseInt(document.getElementById('currentStep').value);
            const nextButton = document.querySelector('[data-next-button]');
            const prevButton = document.querySelector('[data-prev-button]');

            nextButton.addEventListener('click', function(e) {
                e.preventDefault();
                //nextButton.disabled = true;
                // If on final step
                if (currentStep === 5) {
                    submitFinalStep();
                    //nextButton.disabled = false;
                    return;
                }

                let formData = new FormData();
                formData.append('_token', '{{ csrf_token() }}');

                switch (currentStep) {
                    case 1:
                        const selectedUniversity = document.querySelector('[data-university]:checked');
                        if (!selectedUniversity) {
                            alert('Please select a university');
                            return;
                        }
                        formData.append('university', selectedUniversity.value);
                        //console.log(selectedUniversity.value);
                        submitStep('{{ route('purchase.step1', ['id' => $id]) }}', formData);
                        nextButton.disabled = false;
                        break;

                    case 2:
                        const appointletFile = document.querySelector('[data-appointlet-input]');
                        if (!appointletFile.files[0]) {
                            alert('Please upload appointlet proof');
                            return;
                        }
                        formData.append('input_appointlet', appointletFile.files[0]);
                        //console.log(appointletFile.files[0]);
                        submitStep('{{ route('purchase.step2', ['id' => $id]) }}', formData);
                        //nextButton.disabled = false;
                        break;

                    case 3:
                        const personalDataForm = document.querySelector('[data-personal-form]');
                        forms = new FormData(personalDataForm);
                        let isValid = true;
                        let emptyFields = [];

                        forms.forEach((value, key) => {
                            if (value === '') {
                                isValid = false;
                                emptyFields.push(key); // Collect the names of empty fields
                            } else if (key !== '_token') {
                                formData.append(key, value);
                            }
                        });

                        if (!isValid) {
                            alert('Please fill all fields: ' + emptyFields.join(
                                ', ')); // Show a single alert
                            return;
                        } else {
                            submitStep('{{ route('purchase.step3', ['id' => $id]) }}', formData);
                            //nextButton.disabled = false;
                        }
                        break;

                    case 4:
                        const paymentFile = document.querySelector('[data-payment-input]');
                        if (!paymentFile.files[0]) {
                            alert('Please upload payment proof');
                            return;
                        }
                        formData.append('payment_proof', paymentFile.files[0]);
                        //console.log(paymentFile.files[0]);
                        submitStep('{{ route('purchase.step4', ['id' => $id]) }}', formData);
                        //nextButton.disabled = false;
                        break;
                }
            });

            // Handle "Previous" button click
            if (prevButton) {
                prevButton.addEventListener('click', function() {
                    window.location.href = `/tutors/{{$id}}/purchase?step=${currentStep - 1}`;
                });
            }

            function submitStep(url, formData) {
                fetch(url, {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            window.location.href = `/tutors/{{$id}}/purchase?step=${currentStep + 1}`;
                            saveToLocalStorage(currentStep, data.data);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert(`An error occurred: ${error}. Please try again.`);
                    });
            }

            function saveToLocalStorage(step, data) {
                let purchaseData = JSON.parse(localStorage.getItem('purchase')) || {};
                purchaseData[`step${step}`] = data;
                localStorage.setItem('purchase', JSON.stringify(purchaseData));
            }

            function submitFinalStep() {
                const purchaseData = JSON.parse(localStorage.getItem('purchase'));

                const data = {
                    university: purchaseData.step1.university,
                    appointlet_proof: purchaseData.step2.appointlet_proof,
                    name: purchaseData.step3.name,
                    email: purchaseData.step3.email,
                    whatsapp_link: purchaseData.step3.whatsapp_link,
                    major: purchaseData.step3.asal_jurusan,
                    lecturer_name: purchaseData.step3.lecturer_name,
                    payment_proof: purchaseData.step4.payment_proof,
                };

                fetch('{{ route('purchase.store', ['id' => $id]) }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        },
                        body: JSON.stringify(data),
                    })
                    .then(response => {
                        if (response.ok) {
                            return response.json();
                        } else {
                            throw new Error('Failed to submit final data');
                        }
                    })
                    .then(data => {
                        if (data.success) {
                            alert('Purchase completed successfully');
                            localStorage.removeItem('purchase');
                            window.location.href = '/'; // Replace with your success page URL
                        } else {
                            throw new Error(data.message || 'Unknown error occurred');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('An error occurred. Please try again.');
                    });
            }

        });
    </script>
@endsection
