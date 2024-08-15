<!DOCTYPE html>
<html>
<head>
    <title>Reputation Check Webform:</title>
    <meta charset="UTF-8">
	<style>
	    body {
	        font-family: 'Arial', sans-serif;
	        background-color: transparent;
	        display: flex;
	        flex-direction: column;
	        align-items: center;
	        justify-content: center;
	        margin: 0;
	    }

	    .form-container, #results {
	        border-radius: 10px;
	        width: 690px;
	        max-width: 100%;
	        margin: 25px 0px 0px 0px;
	        padding-left: 70px;
	    }

	    .form-container h2 {
	        text-align: center;
	        color: #333;
	        margin-bottom: 20px;
	    }

	    form {
	        display: flex;
	        flex-direction: column;
	    }

	    label {
	        margin-bottom: 5px;
	        font-weight: bold;
	        color: #555;
	    }

	    input[type="text"] {
	        padding: 10px;
	        margin-bottom: 0px;
	        border-radius: 5px;
	        border: 0px solid #ddd;
	        font-size: 16px;
	        width: 100%;
	    }

	    .styled-input {
	        border: none;
	        outline: none;
	        font-size: 16px;
	    }

	    input[type="button"], .div-5 {
	        background-color: #ff712b;
	        color: white;
	        padding: 10px 20px;
	        border: none;
	        border-radius: 5px;
	        cursor: pointer;
	        font-size: 18px;
	        transition: background-color 0.3s;
	    }

	    input[type="button"]:hover, .div-5:hover {
	        background-color: #ed5207;
	    }

	    .separator {
	        text-align: center;
	        border-top: 1px dashed #ddd;
	        line-height: 0.1em;
	        margin: 20px 0 30px;
	    }

	    .separator span {
	        background: #fff;
	        padding: 0 10px;
	    }

	    .div-form {
	        justify-content: space-between;
	        border-radius: 200px;
	        // box-shadow: 0px 5px 40px 0px rgba(0, 0, 0, 0.05), -318px 337px 130px 0px rgba(0, 0, 0, 0), -204px 215px 119px 0px rgba(0, 0, 0, 0.01), -115px 121px 100px 0px rgba(0, 0, 0, 0.03), -51px 54px 74px 0px rgba(0, 0, 0, 0.04), -13px 13px 41px 0px rgba(0, 0, 0, 0.05);
	        box-shadow: 0px 5px 6px 0px rgba(0, 0, 0, 0.05), 0px 0px 0px 0px rgba(0, 0, 0, 0), 0px 0px 0px 0px rgba(0, 0, 0, 0.01), 0px 0px 0px 0px rgba(0, 0, 0, 0.03), -51px 54px 74px 0px rgba(0, 0, 0, 0.04), -13px 13px 9px 0px rgba(0, 0, 0, 0.05);
			background-color: #fff;
	        display: flex;
	        margin-top: 20px;
	        width: 100%;
	        gap: 20px;
	        padding: 12px 12px 12px 15px;
	    }

	    @media (max-width: 991px) {
	        .div-form {
	            max-width: 100%;
	            flex-wrap: wrap;
	            margin-top: 40px;
	        }
	    }

	    .div-form2 {
	        display: flex;
	        gap: 20px;
	        justify-content: space-between;
	        margin: auto 0;
	        width: 100%; /* Ensure it takes the full width of the container */
	    }

	    .div-form3 {
	        justify-content: center;
	        align-items: center;
	        border-radius: 100px;
	        background-color: #f1f7ff;
	        display: flex;
	        width: 44px;
	        height: 44px;
	        padding: 7px 10px;
	    }

	    .img-form {
	        aspect-ratio: 1;
	        object-fit: auto;
	        object-position: center;
	        width: 24px;
	    }

	    .div-form4 {
	        color: var(--Support-text-2, #8a90a9);
	        margin: auto 0;
	        font: 400 16px/170% Poppins, sans-serif;
	        flex-grow: 1; /* Allow this element to take up available space */
	    }

	    .div-form5 {
	        justify-content: center;
	        align-items: center;
	        border-radius: 40px;
	        background-color: var(--Main, #306cfe);
	        color: var(--White, #fff);
	        white-space: nowrap;
	        padding: 16px 32px;
	        font: 400 16px/170% Poppins, sans-serif;
	        cursor: pointer;
	    }

	    @media (max-width: 991px) {
	        .div-5 {
	            white-space: initial;
	            padding: 16px 20px;
	        }
	    }

	    .alert-box {
	        padding: 15px;
	        background-color: #d9edf7;
	        color: #31708f;
	        margin-bottom: 10px;
	        margin-top: 10px;
	        border-radius: 5px;
	        text-align: center;
	        border: 1px solid #bce8f1;
	        width: 40%;
	        margin-right: auto;
	        margin-left: 0;
	    }

	    @media (max-width: 600px) {
	        .alert-box {
	            width: 84%;
	            margin-left: 0;
	            margin-right: auto;
	        }
	    }

	    .row {
	        display: flex;
	        justify-content: space-between;
	        margin-bottom: 10px;
	    }

	    .row:nth-child(3) .col {
	        flex: 1;
	    }

	    .row:nth-child(4) .col:first-child {
	        flex: 0 0 30%;
	    }

	    .row:nth-child(4) .col:last-child {
	        flex: 0 0 70%;
	    }

	    .col {
	        margin-right: 10px;
	    }

	    .col:last-child {
	        margin-right: 0;
	    }
	    .div {
		    background-color: #fff;
		    display: flex;
		    flex-direction: column;
		  }
		  .div-2 {
		    justify-content: center;
		    align-items: center;
		    background-color: #fff;
		    display: flex;
		    width: 100%;
		    font-size: 14px;
		    font-weight: 400;
		    line-height: 150%;
		    padding: 38px 60px;
		  }
		  @media (max-width: 991px) {
		    .div-2 {
		      max-width: 100%;
		      padding: 0 20px;
		    }
		  }
		  .div-3 {
		    display: flex;
		    width: 100%;
		    max-width: 1120px;
		    gap: 20px;
		    justify-content: space-between;
		  }
		  @media (max-width: 991px) {
		    .div-3 {
		      max-width: 100%;
		      flex-wrap: wrap;
		    }
		  }
		  .img {
		    aspect-ratio: 11.11;
		    object-fit: auto;
		    object-position: center;
		    width: 300px;
		    margin: auto 0;
		  }
		  .div-4 {
		    justify-content: end;
		    align-items: center;
		    display: flex;
		    padding-left: 23px;
		    gap: 20px;
		  }
		  .div-5 {
		    color: var(--Text, #0f172a);
		    font-family: Poppins, sans-serif;
		    align-self: stretch;
		    margin: auto 0;
		  }
		  .img-2 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 26px;
		    align-self: stretch;
		    margin: auto 0;
		  }
		  .div-6 {
		    font-family: Poppins, sans-serif;
		    justify-content: center;
		    border-radius: 40px;
		    border-color: rgba(48, 108, 254, 1);
		    border-style: solid;
		    border-width: 1px;
		    align-self: stretch;
		    color: var(--Main, #306cfe);
		    padding: 12px 24px;
		  }
		  @media (max-width: 991px) {
		    .div-6 {
		      padding: 0 20px;
		    }
		  }
		  .div-7 {
		    display: flex;
		    width: 100%;
		    gap: 20px;
		    padding: 0 32px 0 80px;
		  }
		  @media (max-width: 991px) {
		    .div-7 {
		      max-width: 100%;
		      flex-wrap: wrap;
		      padding: 0 20px;
		    }
		  }
		  .div-8 {
		    display: flex;
		    flex-direction: column;
		    overflow: hidden;
		    position: relative;
		    min-height: 794px;
		    align-items: center;
		    justify-content: center;
		    flex-grow: 1;
		    flex-basis: 0;
		    width: fit-content;
		    padding: 0px 60px;
		  }
		  @media (max-width: 991px) {
		    .div-8 {
		      max-width: 100%;
		      padding: 0 20px;
		    }
		  }
		  .img-3 {
		    position: absolute;
		    inset: 0;
		    height: 100%;
		    width: 100%;
		    object-fit: cover;
		    object-position: center;
		  }
		  .div-9 {
		    position: relative;
		    display: flex;
		    margin-top: 0px;
		    width: 834px;
		    max-width: 100%;
		    flex-direction: column;
		  }
		  @media (max-width: 991px) {
		    .div-9 {
		      margin-top: 40px;
		    }
		  }
		  .div-10 {
		    color: var(--Text, #0f172a);
		    text-align: center;
		    font: 500 43px/66px Poppins, sans-serif;
		  }
		  @media (max-width: 991px) {
		    .div-10 {
		      max-width: 100%;
		    }
		  }
		  .div-11 {
		    justify-content: space-between;
		    border-radius: 200px;
		    box-shadow: 0px 5px 40px 0px rgba(0, 0, 0, 0.05),
		      -318px 337px 130px 0px rgba(0, 0, 0, 0),
		      -204px 215px 119px 0px rgba(0, 0, 0, 0.01),
		      -115px 121px 100px 0px rgba(0, 0, 0, 0.03),
		      -51px 54px 74px 0px rgba(0, 0, 0, 0.04),
		      -13px 13px 41px 0px rgba(0, 0, 0, 0.05);
		    background-color: #fff;
		    display: flex;
		    margin-top: 90px;
		    width: 100%;
		    gap: 20px;
		    padding: 12px 12px 12px 15px;
		  }
		  @media (max-width: 991px) {
		    .div-11 {
		      max-width: 100%;
		      flex-wrap: wrap;
		      margin-top: 40px;
		    }
		  }
		  .div-12 {
		    display: flex;
		    gap: 20px;
		    justify-content: space-between;
		    margin: auto 0;
		  }
		  .div-13 {
		    justify-content: center;
		    align-items: center;
		    border-radius: 100px;
		    background-color: #f1f7ff;
		    display: flex;
		    width: 44px;
		    height: 44px;
		    padding: 0 10px;
		  }
		  .img-4 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 24px;
		  }
		  .div-14 {
		    color: var(--Support-text-2, #8a90a9);
		    margin: auto 0;
		    font: 400 16px/170% Poppins, sans-serif;
		  }
		  .div-15 {
		    justify-content: center;
		    align-items: center;
		    border-radius: 40px;
		    background-color: var(--Main, #306cfe);
		    color: var(--White, #fff);
		    white-space: nowrap;
		    padding: 16px 32px;
		    font: 400 16px/170% Poppins, sans-serif;
		  }
		  @media (max-width: 991px) {
		    .div-15 {
		      white-space: initial;
		      padding: 0 20px;
		    }
		  }
		  .div-16 {
		    align-self: center;
		    display: flex;
		    margin-top: 55px;
		    gap: 12px;
		    font-size: 16px;
		    color: var(--Support-text, #626880);
		    font-weight: 400;
		    line-height: 150%;
		  }
		  @media (max-width: 991px) {
		    .div-16 {
		      flex-wrap: wrap;
		      margin-top: 40px;
		    }
		  }
		  .div-17 {
		    font-family: Poppins, sans-serif;
		    justify-content: center;
		    border-radius: 100px;
		    backdrop-filter: blur(20px);
		    border-color: rgba(0, 0, 0, 0.1);
		    border-style: solid;
		    border-width: 1px;
		    background-color: rgba(255, 255, 255, 0.32);
		    padding: 8px 14px;
		  }
		  .img-5 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 24px;
		    margin: auto 0;
		  }
		  .div-18 {
		    font-family: Poppins, sans-serif;
		    justify-content: center;
		    border-radius: 100px;
		    backdrop-filter: blur(20px);
		    border-color: rgba(0, 0, 0, 0.1);
		    border-style: solid;
		    border-width: 1px;
		    background-color: rgba(255, 255, 255, 0.32);
		    padding: 8px 14px;
		  }
		  .img-6 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 24px;
		    margin: auto 0;
		  }
		  .div-19 {
		    font-family: Poppins, sans-serif;
		    justify-content: center;
		    border-radius: 100px;
		    backdrop-filter: blur(20px);
		    border-color: rgba(0, 0, 0, 0.1);
		    border-style: solid;
		    border-width: 1px;
		    background-color: rgba(255, 255, 255, 0.32);
		    padding: 8px 14px;
		  }
		  .img-7 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 24px;
		    margin: auto 0;
		  }
		  .div-20 {
		    font-family: Poppins, sans-serif;
		    justify-content: center;
		    border-radius: 100px;
		    backdrop-filter: blur(20px);
		    border-color: rgba(0, 0, 0, 0.1);
		    border-style: solid;
		    border-width: 1px;
		    background-color: rgba(255, 255, 255, 0.32);
		    padding: 8px 14px;
		  }
		  .img-8 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 28px;
		    align-self: center;
		    margin-top: 78px;
		  }
		  @media (max-width: 991px) {
		    .img-8 {
		      margin-top: 40px;
		    }
		  }
		  .div-21 {
		    justify-content: center;
		    align-items: center;
		    border-radius: 100px;
		    background-color: var(--Main, #306cfe);
		    align-self: end;
		    display: flex;
		    margin-top: 688px;
		    width: 64px;
		    height: 64px;
		    padding: 0 10px;
		  }
		  @media (max-width: 991px) {
		    .div-21 {
		      margin-top: 40px;
		    }
		  }
		  .img-9 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 28px;
		  }
		  .div-22 {
		    align-items: center;
		    background-color: #fff;
		    display: flex;
		    width: 100%;
		    justify-content: center;
		    padding: 0px 60px 80px 60px;
		  }
		  @media (max-width: 991px) {
		    .div-22 {
		      max-width: 100%;
		      padding: 0 20px;
		    }
		  }
		  .div-23 {
		    width: 100%;
		    max-width: 1120px;
		    margin: 50px 0 24px;
		  }
		  @media (max-width: 991px) {
		    .div-23 {
		      max-width: 100%;
		      margin-top: 40px;
		    }
		  }
		  .div-24 {
		    gap: 20px;
		    display: flex;
		  }
		  @media (max-width: 991px) {
		    .div-24 {
		      flex-direction: column;
		      align-items: stretch;
		      gap: 0px;
		    }
		  }
		  .column {
		    display: flex;
		    flex-direction: column;
		    line-height: normal;
		    width: 35%;
		    margin-left: 0px;
		  }
		  @media (max-width: 991px) {
		    .column {
		      width: 100%;
		    }
		  }
		  .div-25 {
		    display: flex;
		    flex-grow: 1;
		    flex-direction: column;
		    font-weight: 400;
		  }
		  @media (max-width: 991px) {
		    .div-25 {
		      margin-top: 40px;
		    }
		  }
		  .div-26 {
		    color: var(--Main, #306cfe);
		    font: 44px/53px Poppins, sans-serif;
		  }
		  .div-27 {
		    color: var(--Support-text, #626880);
		    margin-top: 24px;
		    font: 18px/27px Poppins, sans-serif;
		  }
		  .column-2 {
		    display: flex;
		    flex-direction: column;
		    line-height: normal;
		    width: 65%;
		    margin-left: 20px;
		  }
		  @media (max-width: 991px) {
		    .column-2 {
		      width: 100%;
		    }
		  }
		  .div-28 {
		    align-content: flex-start;
		    flex-wrap: wrap;
		    display: flex;
		    flex-direction: column;
		    font-size: 16px;
		    color: var(--Support-text, #626880);
		    font-weight: 400;
		    line-height: 150%;
		  }
		  @media (max-width: 991px) {
		    .div-28 {
		      max-width: 100%;
		      margin-top: 40px;
		    }
		  }
		  .div-29 {
		    display: flex;
		    gap: 12px;
		  }
		  @media (max-width: 991px) {
		    .div-29 {
		      flex-wrap: wrap;
		    }
		  }
		  .div-30 {
		    border-radius: 66px;
		    background: linear-gradient(
		        104deg,
		        rgba(48, 108, 254, 0.1) -136.76%,
		        rgba(135, 167, 245, 0.1) -34.37%,
		        rgba(171, 196, 255, 0.1) 56.68%,
		        rgba(241, 245, 255, 0.1) 117.98%
		      ),
		      linear-gradient(0deg, #fff 0%, #fff 100%), rgba(15, 23, 42, 0.01);
		    border-color: rgba(48, 108, 254, 0.05);
		    border-style: solid;
		    border-width: 1px;
		    display: flex;
		    gap: 8px;
		    padding: 18px 22px 18px 18px;
		  }
		  .img-10 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 24px;
		  }
		  .div-31 {
		    font-family: Poppins, sans-serif;
		  }
		  .div-32 {
		    border-radius: 66px;
		    background: linear-gradient(
		        104deg,
		        rgba(48, 108, 254, 0.1) -136.76%,
		        rgba(135, 167, 245, 0.1) -34.37%,
		        rgba(171, 196, 255, 0.1) 56.68%,
		        rgba(241, 245, 255, 0.1) 117.98%
		      ),
		      linear-gradient(0deg, #fff 0%, #fff 100%), rgba(15, 23, 42, 0.01);
		    border-color: rgba(48, 108, 254, 0.05);
		    border-style: solid;
		    border-width: 1px;
		    display: flex;
		    gap: 8px;
		    padding: 18px 22px 18px 18px;
		  }
		  @media (max-width: 991px) {
		    .div-32 {
		      padding-left: 20px;
		    }
		  }
		  .img-11 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 24px;
		  }
		  .div-33 {
		    font-family: Poppins, sans-serif;
		  }
		  .div-34 {
		    display: flex;
		    margin-top: 12px;
		    gap: 12px;
		  }
		  @media (max-width: 991px) {
		    .div-34 {
		      flex-wrap: wrap;
		    }
		  }
		  .div-35 {
		    border-radius: 66px;
		    background: linear-gradient(
		        104deg,
		        rgba(48, 108, 254, 0.1) -136.76%,
		        rgba(135, 167, 245, 0.1) -34.37%,
		        rgba(171, 196, 255, 0.1) 56.68%,
		        rgba(241, 245, 255, 0.1) 117.98%
		      ),
		      linear-gradient(0deg, #fff 0%, #fff 100%), rgba(15, 23, 42, 0.01);
		    border-color: rgba(48, 108, 254, 0.05);
		    border-style: solid;
		    border-width: 1px;
		    display: flex;
		    gap: 8px;
		    padding: 18px 22px 18px 18px;
		  }
		  @media (max-width: 991px) {
		    .div-35 {
		      padding: 0 20px;
		    }
		  }
		  .img-12 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 24px;
		  }
		  .div-36 {
		    font-family: Poppins, sans-serif;
		  }
		  .div-37 {
		    border-radius: 66px;
		    background: linear-gradient(
		        104deg,
		        rgba(48, 108, 254, 0.1) -136.76%,
		        rgba(135, 167, 245, 0.1) -34.37%,
		        rgba(171, 196, 255, 0.1) 56.68%,
		        rgba(241, 245, 255, 0.1) 117.98%
		      ),
		      linear-gradient(0deg, #fff 0%, #fff 100%), rgba(15, 23, 42, 0.01);
		    border-color: rgba(48, 108, 254, 0.05);
		    border-style: solid;
		    border-width: 1px;
		    display: flex;
		    gap: 8px;
		    padding: 18px 22px 18px 18px;
		  }
		  @media (max-width: 991px) {
		    .div-37 {
		      padding: 0 20px;
		    }
		  }
		  .img-13 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 24px;
		  }
		  .div-38 {
		    font-family: Poppins, sans-serif;
		  }
		  .div-39 {
		    display: flex;
		    margin-top: 12px;
		    gap: 12px;
		  }
		  @media (max-width: 991px) {
		    .div-39 {
		      flex-wrap: wrap;
		    }
		  }
		  .div-40 {
		    border-radius: 66px;
		    background: linear-gradient(
		        104deg,
		        rgba(48, 108, 254, 0.1) -136.76%,
		        rgba(135, 167, 245, 0.1) -34.37%,
		        rgba(171, 196, 255, 0.1) 56.68%,
		        rgba(241, 245, 255, 0.1) 117.98%
		      ),
		      linear-gradient(0deg, #fff 0%, #fff 100%), rgba(15, 23, 42, 0.01);
		    border-color: rgba(48, 108, 254, 0.05);
		    border-style: solid;
		    border-width: 1px;
		    display: flex;
		    gap: 8px;
		    padding: 18px 22px 18px 18px;
		  }
		  @media (max-width: 991px) {
		    .div-40 {
		      padding: 0 20px;
		    }
		  }
		  .img-14 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 24px;
		  }
		  .div-41 {
		    font-family: Poppins, sans-serif;
		  }
		  .div-42 {
		    border-radius: 66px;
		    background: linear-gradient(
		        104deg,
		        rgba(48, 108, 254, 0.1) -136.76%,
		        rgba(135, 167, 245, 0.1) -34.37%,
		        rgba(171, 196, 255, 0.1) 56.68%,
		        rgba(241, 245, 255, 0.1) 117.98%
		      ),
		      linear-gradient(0deg, #fff 0%, #fff 100%), rgba(15, 23, 42, 0.01);
		    border-color: rgba(48, 108, 254, 0.05);
		    border-style: solid;
		    border-width: 1px;
		    display: flex;
		    gap: 8px;
		    padding: 18px 22px 18px 18px;
		  }
		  @media (max-width: 991px) {
		    .div-42 {
		      padding: 0 20px;
		    }
		  }
		  .img-15 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 24px;
		  }
		  .div-43 {
		    font-family: Poppins, sans-serif;
		  }
		  .div-44 {
		    justify-content: center;
		    align-items: center;
		    background-color: var(--Main, #306cfe);
		    display: flex;
		    gap: 20px;
		    padding: 10px;
		  }
		  @media (max-width: 991px) {
		    .div-44 {
		      flex-wrap: wrap;
		    }
		  }
		  .img-16 {
		    aspect-ratio: 7.69;
		    object-fit: auto;
		    object-position: center;
		    width: 144px;
		    fill: #fff;
		    align-self: stretch;
		    max-width: 100%;
		    margin: auto 0;
		  }
		  .img-17 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 24px;
		    align-self: stretch;
		  }
		  .img-18 {
		    aspect-ratio: 3.33;
		    object-fit: auto;
		    object-position: center;
		    width: 46px;
		    align-self: stretch;
		    margin: auto 0;
		  }
		  .img-19 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 24px;
		    align-self: stretch;
		  }
		  .img-20 {
		    aspect-ratio: 9.09;
		    object-fit: auto;
		    object-position: center;
		    width: 108px;
		    fill: #fff;
		    align-self: stretch;
		    max-width: 100%;
		    margin: auto 0;
		  }
		  .img-21 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 24px;
		    align-self: stretch;
		  }
		  .img-22 {
		    aspect-ratio: 10;
		    object-fit: auto;
		    object-position: center;
		    width: 160px;
		    stroke-width: 0.093px;
		    stroke: #fff;
		    border-color: rgba(255, 255, 255, 1);
		    border-style: solid;
		    border-width: 0px;
		    align-self: stretch;
		    max-width: 100%;
		    margin: auto 0;
		  }
		  .img-23 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 24px;
		    align-self: stretch;
		  }
		  .img-24 {
		    aspect-ratio: 6.67;
		    object-fit: auto;
		    object-position: center;
		    width: 104px;
		    align-self: stretch;
		    max-width: 100%;
		    margin: auto 0;
		  }
		  .img-25 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 24px;
		    align-self: stretch;
		  }
		  .img-26 {
		    aspect-ratio: 8.33;
		    object-fit: auto;
		    object-position: center;
		    width: 140px;
		    align-self: stretch;
		    max-width: 100%;
		    margin: auto 0;
		  }
		  .img-27 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 24px;
		    align-self: stretch;
		  }
		  .img-28 {
		    aspect-ratio: 5.56;
		    object-fit: auto;
		    object-position: center;
		    width: 101px;
		    align-self: stretch;
		    max-width: 100%;
		    margin: auto 0;
		  }
		  .img-29 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 24px;
		    align-self: stretch;
		  }
		  .img-30 {
		    aspect-ratio: 7.14;
		    object-fit: auto;
		    object-position: center;
		    width: 101px;
		    fill: #fff;
		    align-self: stretch;
		    max-width: 100%;
		    margin: auto 0;
		  }
		  .div-45 {
		    align-items: center;
		    background-color: #fff;
		    display: flex;
		    width: 100%;
		    justify-content: center;
		    padding: 80px 60px;
		  }
		  @media (max-width: 991px) {
		    .div-45 {
		      max-width: 100%;
		      padding: 0 20px;
		    }
		  }
		  .div-46 {
		    display: flex;
		    margin-top: 80px;
		    width: 100%;
		    max-width: 1120px;
		    flex-direction: column;
		  }
		  @media (max-width: 991px) {
		    .div-46 {
		      max-width: 100%;
		      margin-top: 40px;
		    }
		  }
		  .div-47 {
		    justify-content: space-between;
		    display: flex;
		    gap: 0px;
		    font-weight: 400;
		  }
		  @media (max-width: 991px) {
		    .div-47 {
		      flex-wrap: wrap;
		    }
		  }
		  .div-48 {
		    display: flex;
		    flex-direction: column;
		    flex: 1;
		  }
		  @media (max-width: 991px) {
		    .div-48 {
		      max-width: 100%;
		    }
		  }
		  .div-49 {
		    color: var(--Text, #0f172a);
		    font: 44px/120% Poppins, sans-serif;
		  }
		  @media (max-width: 991px) {
		    .div-49 {
		      max-width: 100%;
		    }
		  }
		  .div-50 {
		    color: var(--Support-text, #626880);
		    margin-top: 16px;
		    font: 18px/150% Poppins, sans-serif;
		  }
		  @media (max-width: 991px) {
		    .div-50 {
		      max-width: 100%;
		    }
		  }
		  .div-51 {
		    justify-content: center;
		    border-radius: 40px;
		    background-color: var(--Main, #306cfe);
		    align-self: end;
		    margin-top: 45px;
		    color: var(--White, #fff);
		    padding: 12px 24px;
		    font: 16px/170% Poppins, sans-serif;
		  }
		  @media (max-width: 991px) {
		    .div-51 {
		      margin-top: 40px;
		      padding: 0 20px;
		    }
		  }
		  .div-52 {
		    border-radius: 24px;
		    box-shadow: 0px 5px 40px 0px rgba(0, 0, 0, 0.07),
		      -190px 308px 101px 0px rgba(0, 0, 0, 0),
		      -121px 197px 93px 0px rgba(0, 0, 0, 0),
		      -68px 111px 78px 0px rgba(0, 0, 0, 0.01),
		      -30px 49px 58px 0px rgba(0, 0, 0, 0.02),
		      -8px 12px 32px 0px rgba(0, 0, 0, 0.02);
		    background-color: #fff;
		    margin-top: 52px;
		  }
		  @media (max-width: 991px) {
		    .div-52 {
		      max-width: 100%;
		      margin-top: 40px;
		    }
		  }
		  .div-53 {
		    gap: 20px;
		    display: flex;
		  }
		  @media (max-width: 991px) {
		    .div-53 {
		      flex-direction: column;
		      align-items: stretch;
		      gap: 0px;
		    }
		  }
		  .column-3 {
		    display: flex;
		    flex-direction: column;
		    line-height: normal;
		    width: 50%;
		    margin-left: 0px;
		  }
		  @media (max-width: 991px) {
		    .column-3 {
		      width: 100%;
		    }
		  }
		  .div-54 {
		    justify-content: space-between;
		    border-radius: 24px;
		    background-color: var(--Main, #306cfe);
		    display: flex;
		    flex-grow: 1;
		    flex-direction: column;
		    width: 100%;
		    padding: 44px 40px;
		  }
		  @media (max-width: 991px) {
		    .div-54 {
		      max-width: 100%;
		      padding: 0 20px;
		    }
		  }
		  .div-55 {
		  }
		  @media (max-width: 991px) {
		    .div-55 {
		      max-width: 100%;
		    }
		  }
		  .div-56 {
		    gap: 20px;
		    display: flex;
		  }
		  @media (max-width: 991px) {
		    .div-56 {
		      flex-direction: column;
		      align-items: stretch;
		      gap: 0px;
		    }
		  }
		  .column-4 {
		    display: flex;
		    flex-direction: column;
		    line-height: normal;
		    width: 83%;
		    margin-left: 0px;
		  }
		  @media (max-width: 991px) {
		    .column-4 {
		      width: 100%;
		    }
		  }
		  .div-57 {
		    justify-content: center;
		    border-radius: 12px;
		    background-color: rgba(255, 255, 255, 0.2);
		    display: flex;
		    width: 100%;
		    flex-grow: 1;
		    padding-top: 6px;
		    flex-direction: column;
		    margin: 0 auto;
		  }
		  @media (max-width: 991px) {
		    .div-57 {
		      margin-top: 27px;
		    }
		  }
		  .div-58 {
		    color: var(--White, #fff);
		    margin: 0 16px;
		    font: 500 12px Poppins, sans-serif;
		  }
		  @media (max-width: 991px) {
		    .div-58 {
		      margin: 0 10px;
		    }
		  }
		  .div-59 {
		    border-radius: 12px;
		    box-shadow: -30px 49px 58px 0px rgba(0, 0, 0, 0.02),
		      -8px 12px 32px 0px rgba(0, 0, 0, 0.02),
		      0px 5px 40px 0px rgba(0, 0, 0, 0.05),
		      -190px 308px 101px 0px rgba(0, 0, 0, 0),
		      -121px 197px 93px 0px rgba(0, 0, 0, 0),
		      -68px 111px 78px 0px rgba(0, 0, 0, 0.01),
		      -30px 49px 58px 0px rgba(0, 0, 0, 0.02),
		      -8px 12px 32px 0px rgba(0, 0, 0, 0.02);
		    background-color: #fff;
		    display: flex;
		    margin-top: 6px;
		    gap: 12px;
		    font-weight: 400;
		    padding: 16px;
		  }
		  .img-31 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 44px;
		    padding: 10px;
		  }
		  .div-60 {
		    display: flex;
		    flex-direction: column;
		    flex: 1;
		    margin: auto 0;
		  }
		  .div-61 {
		    -webkit-box-orient: vertical;
		    -webkit-line-clamp: 1;
		    color: var(--Text, #0f172a);
		    text-overflow: ellipsis;
		    font: 14px Poppins, sans-serif;
		  }
		  .div-62 {
		    display: flex;
		    margin-top: 4px;
		    gap: 6px;
		    font-size: 10px;
		    color: var(--Support-text-2, #8a90a9);
		  }
		  .img-32 {
		    aspect-ratio: 5;
		    object-fit: auto;
		    object-position: center;
		    width: 80px;
		  }
		  .div-63 {
		    font-family: Poppins, sans-serif;
		  }
		  .column-5 {
		    display: flex;
		    flex-direction: column;
		    line-height: normal;
		    width: 17%;
		    margin-left: 20px;
		  }
		  @media (max-width: 991px) {
		    .column-5 {
		      width: 100%;
		    }
		  }
		  .img-33 {
		    aspect-ratio: 1.33;
		    object-fit: auto;
		    object-position: center;
		    width: 76px;
		    stroke-width: 1.5px;
		    stroke: #fff;
		    border-color: rgba(255, 255, 255, 1);
		    border-width: 2px;
		    margin-top: 45px;
		  }
		  @media (max-width: 991px) {
		    .img-33 {
		      margin-top: 40px;
		    }
		  }
		  .div-64 {
		    justify-content: center;
		    border-radius: 12px;
		    background-color: rgba(255, 255, 255, 0.2);
		    align-self: end;
		    display: flex;
		    margin-top: 18px;
		    width: 300px;
		    max-width: 100%;
		    padding-top: 6px;
		    flex-direction: column;
		  }
		  .div-65 {
		    color: var(--White, #fff);
		    margin: 0 16px;
		    font: 500 12px Poppins, sans-serif;
		  }
		  @media (max-width: 991px) {
		    .div-65 {
		      margin: 0 10px;
		    }
		  }
		  .div-66 {
		    align-items: start;
		    border-radius: 12px;
		    box-shadow: -30px 49px 58px 0px rgba(0, 0, 0, 0.02),
		      -8px 12px 32px 0px rgba(0, 0, 0, 0.02),
		      0px 5px 40px 0px rgba(0, 0, 0, 0.05),
		      -190px 308px 101px 0px rgba(0, 0, 0, 0),
		      -121px 197px 93px 0px rgba(0, 0, 0, 0),
		      -68px 111px 78px 0px rgba(0, 0, 0, 0.01),
		      -30px 49px 58px 0px rgba(0, 0, 0, 0.02),
		      -8px 12px 32px 0px rgba(0, 0, 0, 0.02);
		    background-color: #fff;
		    display: flex;
		    margin-top: 6px;
		    gap: 12px;
		    font-weight: 400;
		    padding: 16px 16px 10px;
		  }
		  .img-34 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 44px;
		    padding: 10px;
		  }
		  .div-67 {
		    display: flex;
		    flex-direction: column;
		    flex: 1;
		  }
		  .div-68 {
		    -webkit-box-orient: vertical;
		    -webkit-line-clamp: 1;
		    color: var(--Text, #0f172a);
		    text-overflow: ellipsis;
		    font: 14px Poppins, sans-serif;
		  }
		  .div-69 {
		    display: flex;
		    margin-top: 4px;
		    gap: 6px;
		    font-size: 10px;
		    color: var(--Support-text-2, #8a90a9);
		  }
		  .img-35 {
		    aspect-ratio: 5;
		    object-fit: auto;
		    object-position: center;
		    width: 80px;
		  }
		  .div-70 {
		    font-family: Poppins, sans-serif;
		  }
		  .div-71 {
		    align-self: start;
		    display: flex;
		    margin-top: 45px;
		    gap: 12px;
		  }
		  @media (max-width: 991px) {
		    .div-71 {
		      margin-top: 40px;
		    }
		  }
		  .div-72 {
		    justify-content: center;
		    align-items: center;
		    border-radius: 100px;
		    background-color: var(--White, #fff);
		    display: flex;
		    flex-direction: column;
		    width: 44px;
		    height: 44px;
		    padding: 10px;
		  }
		  .img-36 {
		    aspect-ratio: 0.83;
		    object-fit: auto;
		    object-position: center;
		    width: 10px;
		    fill: var(--Main, #306cfe);
		  }
		  .div-73 {
		    color: var(--White, #fff);
		    margin: auto 0;
		    font: 500 16px/150% Poppins, sans-serif;
		  }
		  .div-74 {
		    color: var(--White, #fff);
		    margin-top: 18px;
		    font: 400 16px/27px Poppins, sans-serif;
		  }
		  @media (max-width: 991px) {
		    .div-74 {
		      max-width: 100%;
		    }
		  }
		  .column-6 {
		    display: flex;
		    flex-direction: column;
		    line-height: normal;
		    width: 50%;
		    margin-left: 20px;
		  }
		  @media (max-width: 991px) {
		    .column-6 {
		      width: 100%;
		    }
		  }
		  .div-75 {
		    justify-content: space-between;
		    border-radius: 24px;
		    box-shadow: 0px 5px 40px 0px rgba(0, 0, 0, 0.03);
		    display: flex;
		    flex-grow: 1;
		    flex-direction: column;
		    font-weight: 400;
		    padding: 44px 40px 44px 100px;
		  }
		  @media (max-width: 991px) {
		    .div-75 {
		      max-width: 100%;
		      padding: 0 20px;
		    }
		  }
		  .div-76 {
		    color: var(--Text, #0f172a);
		    font: 32px/38px Poppins, sans-serif;
		  }
		  @media (max-width: 991px) {
		    .div-76 {
		      max-width: 100%;
		    }
		  }
		  .div-77 {
		    color: var(--Support-text, #626880);
		    margin-top: 20px;
		    font: 16px/27px Poppins, sans-serif;
		  }
		  @media (max-width: 991px) {
		    .div-77 {
		      max-width: 100%;
		    }
		  }
		  .img-37 {
		    aspect-ratio: 3.7;
		    object-fit: auto;
		    object-position: center;
		    width: 450px;
		    box-shadow: -30px 49px 58px 0px rgba(0, 0, 0, 0.02),
		      -8px 12px 32px 0px rgba(0, 0, 0, 0.02),
		      0px 5px 40px 0px rgba(0, 0, 0, 0.05),
		      -190px 308px 101px 0px rgba(0, 0, 0, 0),
		      -121px 197px 93px 0px rgba(0, 0, 0, 0),
		      -68px 111px 78px 0px rgba(0, 0, 0, 0.01),
		      -30px 49px 58px 0px rgba(0, 0, 0, 0.02),
		      -8px 12px 32px 0px rgba(0, 0, 0, 0.02);
		    margin-top: 88px;
		    max-width: 100%;
		  }
		  @media (max-width: 991px) {
		    .img-37 {
		      margin-top: 40px;
		    }
		  }
		  .div-78 {
		    margin-top: 52px;
		  }
		  @media (max-width: 991px) {
		    .div-78 {
		      max-width: 100%;
		      margin-top: 40px;
		    }
		  }
		  .div-79 {
		    gap: 20px;
		    display: flex;
		  }
		  @media (max-width: 991px) {
		    .div-79 {
		      flex-direction: column;
		      align-items: stretch;
		      gap: 0px;
		    }
		  }
		  .column-7 {
		    display: flex;
		    flex-direction: column;
		    line-height: normal;
		    width: 25%;
		    margin-left: 0px;
		  }
		  @media (max-width: 991px) {
		    .column-7 {
		      width: 100%;
		    }
		  }
		  .div-80 {
		    display: flex;
		    flex-grow: 1;
		    flex-direction: column;
		    font-size: 16px;
		    font-weight: 400;
		    line-height: 150%;
		  }
		  @media (max-width: 991px) {
		    .div-80 {
		      margin-top: 34px;
		    }
		  }
		  .div-81 {
		    border-radius: 4px;
		    background-color: #dfe5ff;
		    height: 3px;
		  }
		  .div-82 {
		    color: var(--Support-text-2, #8a90a9);
		    font-family: Poppins, sans-serif;
		    margin-top: 28px;
		  }
		  .div-83 {
		    color: var(--Text, #0f172a);
		    font-family: Poppins, sans-serif;
		    font-weight: 500;
		    margin-top: 12px;
		  }
		  .div-84 {
		    color: var(--Support-text, #626880);
		    margin-top: 8px;
		    font: 14px/24px Poppins, sans-serif;
		  }
		  .column-8 {
		    display: flex;
		    flex-direction: column;
		    line-height: normal;
		    width: 25%;
		    margin-left: 20px;
		  }
		  @media (max-width: 991px) {
		    .column-8 {
		      width: 100%;
		    }
		  }
		  .div-85 {
		    display: flex;
		    flex-grow: 1;
		    flex-direction: column;
		  }
		  @media (max-width: 991px) {
		    .div-85 {
		      margin-top: 34px;
		    }
		  }
		  .div-86 {
		    border-radius: 4px;
		    background-color: #dfe5ff;
		    display: flex;
		    flex-direction: column;
		    justify-content: center;
		  }
		  .div-87 {
		    border-radius: 10px;
		    background-color: var(--Main, #306cfe);
		    height: 3px;
		  }
		  .div-88 {
		    color: var(--Support-text-2, #8a90a9);
		    margin-top: 28px;
		    font: 400 16px/150% Poppins, sans-serif;
		  }
		  .div-89 {
		    color: var(--Main, #306cfe);
		    margin-top: 12px;
		    font: 500 16px/150% Poppins, sans-serif;
		  }
		  .div-90 {
		    color: var(--Support-text, #626880);
		    margin-top: 8px;
		    font: 400 14px/24px Poppins, sans-serif;
		  }
		  .column-9 {
		    display: flex;
		    flex-direction: column;
		    line-height: normal;
		    width: 25%;
		    margin-left: 20px;
		  }
		  @media (max-width: 991px) {
		    .column-9 {
		      width: 100%;
		    }
		  }
		  .div-91 {
		    display: flex;
		    flex-grow: 1;
		    flex-direction: column;
		    font-size: 16px;
		    font-weight: 400;
		    line-height: 150%;
		  }
		  @media (max-width: 991px) {
		    .div-91 {
		      margin-top: 34px;
		    }
		  }
		  .div-92 {
		    border-radius: 4px;
		    background-color: #dfe5ff;
		    height: 3px;
		  }
		  .div-93 {
		    color: var(--Support-text-2, #8a90a9);
		    font-family: Poppins, sans-serif;
		    margin-top: 28px;
		  }
		  .div-94 {
		    color: var(--Text, #0f172a);
		    font-family: Poppins, sans-serif;
		    font-weight: 500;
		    margin-top: 12px;
		  }
		  .div-95 {
		    color: var(--Support-text, #626880);
		    margin-top: 8px;
		    font: 14px/24px Poppins, sans-serif;
		  }
		  .column-10 {
		    display: flex;
		    flex-direction: column;
		    line-height: normal;
		    width: 25%;
		    margin-left: 20px;
		  }
		  @media (max-width: 991px) {
		    .column-10 {
		      width: 100%;
		    }
		  }
		  .div-96 {
		    display: flex;
		    flex-grow: 1;
		    flex-direction: column;
		    font-size: 16px;
		    font-weight: 400;
		    line-height: 150%;
		  }
		  @media (max-width: 991px) {
		    .div-96 {
		      margin-top: 34px;
		    }
		  }
		  .div-97 {
		    border-radius: 4px;
		    background-color: #dfe5ff;
		    height: 3px;
		  }
		  .div-98 {
		    color: var(--Support-text-2, #8a90a9);
		    font-family: Poppins, sans-serif;
		    margin-top: 28px;
		  }
		  .div-99 {
		    color: var(--Text, #0f172a);
		    font-family: Poppins, sans-serif;
		    font-weight: 500;
		    margin-top: 12px;
		  }
		  .div-100 {
		    color: var(--Support-text, #626880);
		    margin-top: 8px;
		    font: 14px/24px Poppins, sans-serif;
		  }
		  .div-101 {
		    justify-content: end;
		    display: flex;
		    margin-top: 37px;
		    padding-left: 80px;
		    gap: 12px;
		  }
		  @media (max-width: 991px) {
		    .div-101 {
		      flex-wrap: wrap;
		      padding-left: 20px;
		    }
		  }
		  .div-102 {
		    justify-content: center;
		    align-items: center;
		    border-radius: 200px;
		    border-color: rgba(15, 23, 42, 0.1);
		    border-style: solid;
		    border-width: 1px;
		    background-color: #fff;
		    display: flex;
		    width: 52px;
		    height: 52px;
		    padding: 10px;
		  }
		  .img-38 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 24px;
		  }
		  .div-103 {
		    justify-content: center;
		    align-items: center;
		    border-radius: 200px;
		    border-color: rgba(15, 23, 42, 0.2);
		    border-style: solid;
		    border-width: 1px;
		    background-color: #fff;
		    display: flex;
		    width: 52px;
		    height: 52px;
		    padding: 10px;
		  }
		  .img-39 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 24px;
		  }
		  .div-104 {
		    background-color: #fff;
		    display: flex;
		    width: 100%;
		    flex-direction: column;
		    align-items: center;
		    padding: 0 60px 48px;
		  }
		  @media (max-width: 991px) {
		    .div-104 {
		      max-width: 100%;
		      padding: 0 20px;
		    }
		  }
		  .img-40 {
		    aspect-ratio: 1.64;
		    object-fit: auto;
		    object-position: center;
		    width: 100%;
		    max-width: 1120px;
		  }
		  @media (max-width: 991px) {
		    .img-40 {
		      max-width: 100%;
		    }
		  }
		  .div-105 {
		    justify-content: center;
		    border-radius: 40px;
		    background-color: var(--Main, #306cfe);
		    align-self: end;
		    margin-right: 160px;
		    color: var(--White, #fff);
		    padding: 12px 24px;
		    font: 400 16px/170% Poppins, sans-serif;
		  }
		  @media (max-width: 991px) {
		    .div-105 {
		      margin-right: 10px;
		      padding: 0 20px;
		    }
		  }
		  .div-106 {
		    align-items: center;
		    display: flex;
		    width: 100%;
		    justify-content: center;
		    padding: 80px 60px;
		  }
		  @media (max-width: 991px) {
		    .div-106 {
		      max-width: 100%;
		      padding: 0 20px;
		    }
		  }
		  .div-107 {
		    width: 100%;
		    max-width: 1120px;
		    margin: 120px 0 48px;
		  }
		  @media (max-width: 991px) {
		    .div-107 {
		      max-width: 100%;
		      margin: 40px 0;
		    }
		  }
		  .div-108 {
		    gap: 20px;
		    display: flex;
		  }
		  @media (max-width: 991px) {
		    .div-108 {
		      flex-direction: column;
		      align-items: stretch;
		      gap: 0px;
		    }
		  }
		  .column-11 {
		    display: flex;
		    flex-direction: column;
		    line-height: normal;
		    width: 40%;
		    margin-left: 0px;
		  }
		  @media (max-width: 991px) {
		    .column-11 {
		      width: 100%;
		    }
		  }
		  .div-109 {
		    display: flex;
		    flex-grow: 1;
		    flex-direction: column;
		    justify-content: center;
		  }
		  @media (max-width: 991px) {
		    .div-109 {
		      max-width: 100%;
		      margin-top: 40px;
		    }
		  }
		  .div-110 {
		    justify-content: space-between;
		    align-items: start;
		    border-radius: 32px;
		    background-color: var(--Main, #306cfe);
		    display: flex;
		    flex-direction: column;
		    padding: 0 0 44px 44px;
		  }
		  @media (max-width: 991px) {
		    .div-110 {
		      max-width: 100%;
		      padding-left: 20px;
		    }
		  }
		  .div-111 {
		  }
		  @media (max-width: 991px) {
		    .div-111 {
		      max-width: 100%;
		    }
		  }
		  .div-112 {
		    gap: 20px;
		    display: flex;
		  }
		  @media (max-width: 991px) {
		    .div-112 {
		      flex-direction: column;
		      align-items: stretch;
		      gap: 0px;
		    }
		  }
		  .column-12 {
		    display: flex;
		    flex-direction: column;
		    line-height: normal;
		    width: 82%;
		    margin-left: 0px;
		  }
		  @media (max-width: 991px) {
		    .column-12 {
		      width: 100%;
		    }
		  }
		  .div-113 {
		    border-radius: 16px;
		    box-shadow: -30px 49px 58px 0px rgba(0, 0, 0, 0.02),
		      -8px 12px 32px 0px rgba(0, 0, 0, 0.02),
		      0px 5px 40px 0px rgba(0, 0, 0, 0.05),
		      -190px 308px 101px 0px rgba(0, 0, 0, 0),
		      -121px 197px 93px 0px rgba(0, 0, 0, 0),
		      -68px 111px 78px 0px rgba(0, 0, 0, 0.01),
		      -30px 49px 58px 0px rgba(0, 0, 0, 0.02),
		      -8px 12px 32px 0px rgba(0, 0, 0, 0.02);
		    background-color: #fff;
		    z-index: 10;
		    display: flex;
		    margin-top: 44px;
		    flex-direction: column;
		    font-weight: 400;
		    width: 100%;
		    padding: 32px 0 32px 32px;
		  }
		  @media (max-width: 991px) {
		    .div-113 {
		      max-width: 100%;
		      margin-top: 40px;
		    }
		  }
		  .div-114 {
		    color: var(--Text, #0f172a);
		    font: 29px/116% Poppins, sans-serif;
		  }
		  .div-115 {
		    color: var(--Support-text, #626880);
		    margin-top: 37px;
		    font: 14px/21px Poppins, sans-serif;
		    margin-right: 20px;
		  }
		  .column-13 {
		    display: flex;
		    flex-direction: column;
		    line-height: normal;
		    width: 33%;
		    margin-left: 20px;
		  }
		  @media (max-width: 991px) {
		    .column-13 {
		      width: 100%;
		    }
		  }
		  .div-116 {
		    border-radius: 50%;
		    background-color: #fff;
		    width: 205px;
		    height: 230px;
		    margin: 0 auto;
		  }
		  .div-117 {
		    justify-content: center;
		    align-items: center;
		    border-radius: 20px;
		    background-color: rgba(0, 0, 0, 0.1);
		    margin-top: 26px;
		    color: var(--White, #fff);
		    text-align: center;
		    padding: 19px 14px;
		    font: 400 16px Poppins, sans-serif;
		    width: 85%;
		  }
		  @media (max-width: 991px) {
		    .div-117 {
		      max-width: 100%;
		      padding: 0 20px;
		    }
		  }
		  .img-41 {
		    aspect-ratio: 0.85;
		    object-fit: auto;
		    object-position: center;
		    width: 16px;
		    stroke-width: 1.5px;
		    stroke: #fff;
		    // border-color: rgba(255, 255, 255, 1);
		    // border-style: solid;
		    border-width: 2px;
		    align-self: center;
		    margin: 12px 0 0 0px;
		  }
		  .div-118 {
		    justify-content: center;
		    align-items: center;
		    border-radius: 20px;
		    background-color: rgba(0, 0, 0, 0.1);
		    margin-top: 12px;
		    color: var(--White, #fff);
		    text-align: center;
		    padding: 19px 14px;
		    font: 400 16px Poppins, sans-serif;
		    width: 85%;
		  }
		  @media (max-width: 991px) {
		    .div-118 {
		      max-width: 100%;
		      padding: 0 20px;
		    }
		  }
		  .img-42 {
		    aspect-ratio: 0.85;
		    object-fit: auto;
		    object-position: center;
		    width: 16px;
		    stroke-width: 1.5px;
		    stroke: #fff;
		    // border-color: rgba(255, 255, 255, 1);
		    // border-style: solid;
		    border-width: 2px;
		    align-self: center;
		    margin: 12px 0 0 0px;
		  }
		  .div-119 {
		    justify-content: center;
		    align-items: center;
		    border-radius: 20px;
		    background-color: rgba(15, 23, 42, 0.4);
		    margin-top: 12px;
		    color: var(--White, #fff);
		    text-align: center;
		    padding: 19px 14px;
		    font: 400 16px Poppins, sans-serif;
		    width: 85%;
		  }
		  @media (max-width: 991px) {
		    .div-119 {
		      max-width: 100%;
		      padding: 0 20px;
		    }
		  }
		  .column-14 {
		    display: flex;
		    flex-direction: column;
		    line-height: normal;
		    width: 50%;
		    margin-left: 20px;
		  }
		  @media (max-width: 991px) {
		    .column-14 {
		      width: 100%;
		    }
		  }
		  .div-120 {
		    display: flex;
		    margin-top: 7px;
		    flex-direction: column;
		  }
		  @media (max-width: 991px) {
		    .div-120 {
		      max-width: 100%;
		      margin-top: 40px;
		    }
		  }
		  .div-121 {
		    color: var(--Text, #0f172a);
		    font: 400 48px/136% Poppins, sans-serif;
		  }
		  @media (max-width: 991px) {
		    .div-121 {
		      max-width: 100%;
		      font-size: 40px;
		    }
		  }
		  .div-122 {
		    color: var(--Support-text, #626880);
		    margin-top: 24px;
		    font: 400 18px/27px Poppins, sans-serif;
		  }
		  @media (max-width: 991px) {
		    .div-122 {
		      max-width: 100%;
		    }
		  }
		  .div-123 {
		    align-items: start;
		    border-radius: 20px;
		    background-color: rgba(223, 229, 255, 0.61);
		    display: flex;
		    margin-top: 44px;
		    flex-direction: column;
		    justify-content: center;
		  }
		  @media (max-width: 991px) {
		    .div-123 {
		      max-width: 100%;
		      padding-right: 20px;
		      margin-top: 40px;
		    }
		  }
		  .div-124 {
		    border-radius: 30px;
		    background-color: var(--Main, #306cfe);
		    width: 251px;
		    max-width: 100%;
		    height: 2px;
		  }
		  .div-125 {
		    margin-top: 44px;
		  }
		  @media (max-width: 991px) {
		    .div-125 {
		      max-width: 100%;
		      margin-top: 40px;
		    }
		  }
		  .div-126 {
		    gap: 20px;
		    display: flex;
		  }
		  @media (max-width: 991px) {
		    .div-126 {
		      flex-direction: column;
		      align-items: stretch;
		      gap: 0px;
		    }
		  }
		  .column-15 {
		    display: flex;
		    flex-direction: column;
		    line-height: normal;
		    width: 50%;
		    margin-left: 0px;
		  }
		  @media (max-width: 991px) {
		    .column-15 {
		      width: 100%;
		    }
		  }
		  .div-127 {
		    display: flex;
		    flex-grow: 1;
		    flex-direction: column;
		  }
		  @media (max-width: 991px) {
		    .div-127 {
		      margin-top: 40px;
		    }
		  }
		  .div-128 {
		    border-radius: 40px;
		    border-color: rgba(48, 108, 254, 0.1);
		    border-style: solid;
		    border-width: 2px;
		    display: flex;
		    flex-direction: column;
		    justify-content: center;
		    padding: 10px;
		    width: 18%;
		  }
		  .div-129 {
		    justify-content: center;
		    align-items: start;
		    border-radius: 100px;
		    background-color: var(--Main, #306cfe);
		    display: flex;
		    flex-direction: column;
		    padding: 10px;
		  }
		  @media (max-width: 991px) {
		    .div-129 {
		      padding-right: 20px;
		    }
		  }
		  .img-43 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 24px;
		  }
		  .div-130 {
		    color: var(--Text, #0f172a);
		    margin-top: 18px;
		    font: 500 16px/150% Poppins, sans-serif;
		  }
		  .div-131 {
		    color: var(--Support-text, #626880);
		    margin-top: 8px;
		    font: 400 14px/24px Poppins, sans-serif;
		  }
		  .column-16 {
		    display: flex;
		    flex-direction: column;
		    line-height: normal;
		    width: 50%;
		    margin-left: 20px;
		  }
		  @media (max-width: 991px) {
		    .column-16 {
		      width: 100%;
		    }
		  }
		  .div-132 {
		    display: flex;
		    flex-grow: 1;
		    flex-direction: column;
		  }
		  @media (max-width: 991px) {
		    .div-132 {
		      margin-top: 40px;
		    }
		  }
		  .div-133 {
		    border-radius: 40px;
		    border-color: rgba(48, 108, 254, 0.1);
		    border-style: solid;
		    border-width: 2px;
		    display: flex;
		    flex-direction: column;
		    justify-content: center;
		    padding: 10px;
		    width: 18%;
		  }
		  .div-134 {
		    justify-content: center;
		    align-items: start;
		    border-radius: 100px;
		    background-color: var(--Main, #306cfe);
		    display: flex;
		    flex-direction: column;
		    padding: 10px;
		  }
		  @media (max-width: 991px) {
		    .div-134 {
		      padding-right: 20px;
		    }
		  }
		  .img-44 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 24px;
		  }
		  .div-135 {
		    color: var(--Text, #0f172a);
		    margin-top: 18px;
		    font: 500 16px/150% Poppins, sans-serif;
		  }
		  .div-136 {
		    color: var(--Support-text, #626880);
		    margin-top: 8px;
		    font: 400 14px/24px Poppins, sans-serif;
		  }
		  .div-137 {
		    justify-content: center;
		    border-radius: 40px;
		    background-color: var(--Main, #306cfe);
		    align-self: start;
		    margin-top: 60px;
		    color: var(--White, #fff);
		    padding: 12px 24px;
		    font: 400 16px/170% Poppins, sans-serif;
		  }
		  @media (max-width: 991px) {
		    .div-137 {
		      margin-top: 40px;
		      padding: 0 20px;
		    }
		  }
		  .div-138 {
		    align-items: center;
		    display: flex;
		    width: 100%;
		    flex-direction: column;
		    padding: 80px 60px 0;
		  }
		  @media (max-width: 991px) {
		    .div-138 {
		      max-width: 100%;
		      padding: 0 20px;
		    }
		  }
		  .div-139 {
		    display: flex;
		    margin-top: 60px;
		    width: 878px;
		    max-width: 100%;
		    flex-direction: column;
		  }
		  @media (max-width: 991px) {
		    .div-139 {
		      margin-top: 40px;
		    }
		  }
		  .div-140 {
		    color: var(--Main, #306cfe);
		    text-align: center;
		    font: 400 44px/120% Poppins, sans-serif;
		  }
		  @media (max-width: 991px) {
		    .div-140 {
		      max-width: 100%;
		    }
		  }
		  .div-141 {
		    color: var(--Support-text, #626880);
		    text-align: center;
		    align-self: center;
		    margin-top: 24px;
		    width: 580px;
		    font: 400 18px/31px Poppins, sans-serif;
		  }
		  @media (max-width: 991px) {
		    .div-141 {
		      max-width: 100%;
		    }
		  }
		  .div-142 {
		    border-radius: 12px;
		    border-color: rgba(15, 23, 42, 0.1);
		    border-style: solid;
		    border-width: 1px;
		    background-color: rgba(255, 255, 255, 0.1);
		    display: flex;
		    margin-top: 64px;
		    gap: 20px;
		    font-size: 18px;
		    color: var(--Text, #0f172a);
		    font-weight: 500;
		    line-height: 150%;
		    padding: 28px 30px;
		  }
		  @media (max-width: 991px) {
		    .div-142 {
		      flex-wrap: wrap;
		      margin-top: 40px;
		      padding: 0 20px;
		    }
		  }
		  .div-143 {
		    font-family: Poppins, sans-serif;
		    flex: 1;
		  }
		  @media (max-width: 991px) {
		    .div-143 {
		      max-width: 100%;
		    }
		  }
		  .img-45 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 24px;
		    margin: auto 0;
		  }
		  .div-144 {
		    justify-content: center;
		    border-radius: 12px;
		    border-color: rgba(15, 23, 42, 0.1);
		    border-style: solid;
		    border-width: 1px;
		    background-color: rgba(255, 255, 255, 0.1);
		    display: flex;
		    margin-top: 12px;
		    flex-direction: column;
		    padding: 28px 30px;
		  }
		  @media (max-width: 991px) {
		    .div-144 {
		      max-width: 100%;
		      padding: 0 20px;
		    }
		  }
		  .div-145 {
		    display: flex;
		    gap: 20px;
		    font-size: 18px;
		    color: var(--Main, #306cfe);
		    font-weight: 500;
		    line-height: 150%;
		  }
		  @media (max-width: 991px) {
		    .div-145 {
		      flex-wrap: wrap;
		    }
		  }
		  .div-146 {
		    font-family: Poppins, sans-serif;
		    flex: 1;
		  }
		  @media (max-width: 991px) {
		    .div-146 {
		      max-width: 100%;
		    }
		  }
		  .img-46 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 24px;
		    margin: auto 0;
		  }
		  .div-147 {
		    color: var(--Support-text, #626880);
		    margin-top: 20px;
		    font: 400 16px/27px Poppins, sans-serif;
		  }
		  @media (max-width: 991px) {
		    .div-147 {
		      max-width: 100%;
		    }
		  }
		  .div-148 {
		    border-radius: 12px;
		    border-color: rgba(15, 23, 42, 0.1);
		    border-style: solid;
		    border-width: 1px;
		    background-color: rgba(255, 255, 255, 0.1);
		    display: flex;
		    margin-top: 12px;
		    gap: 20px;
		    font-size: 18px;
		    color: var(--Text, #0f172a);
		    font-weight: 500;
		    line-height: 150%;
		    padding: 28px 30px;
		  }
		  @media (max-width: 991px) {
		    .div-148 {
		      flex-wrap: wrap;
		      padding: 0 20px;
		    }
		  }
		  .div-149 {
		    font-family: Poppins, sans-serif;
		    flex: 1;
		  }
		  @media (max-width: 991px) {
		    .div-149 {
		      max-width: 100%;
		    }
		  }
		  .img-47 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 24px;
		    margin: auto 0;
		  }
		  .div-150 {
		    border-radius: 12px;
		    border-color: rgba(15, 23, 42, 0.1);
		    border-style: solid;
		    border-width: 1px;
		    background-color: rgba(255, 255, 255, 0.1);
		    display: flex;
		    margin-top: 12px;
		    gap: 20px;
		    font-size: 18px;
		    color: var(--Text, #0f172a);
		    font-weight: 500;
		    line-height: 150%;
		    padding: 28px 30px;
		  }
		  @media (max-width: 991px) {
		    .div-150 {
		      flex-wrap: wrap;
		      padding: 0 20px;
		    }
		  }
		  .div-151 {
		    font-family: Poppins, sans-serif;
		    flex: 1;
		  }
		  @media (max-width: 991px) {
		    .div-151 {
		      max-width: 100%;
		    }
		  }
		  .img-48 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 24px;
		    margin: auto 0;
		  }
		  .div-152 {
		    border-radius: 12px;
		    border-color: rgba(15, 23, 42, 0.1);
		    border-style: solid;
		    border-width: 1px;
		    background-color: rgba(255, 255, 255, 0.1);
		    display: flex;
		    margin-top: 12px;
		    gap: 20px;
		    font-size: 18px;
		    color: var(--Text, #0f172a);
		    font-weight: 500;
		    line-height: 150%;
		    padding: 28px 30px;
		  }
		  @media (max-width: 991px) {
		    .div-152 {
		      flex-wrap: wrap;
		      padding: 0 20px;
		    }
		  }
		  .div-153 {
		    font-family: Poppins, sans-serif;
		    flex: 1;
		  }
		  @media (max-width: 991px) {
		    .div-153 {
		      max-width: 100%;
		    }
		  }
		  .img-49 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 24px;
		    margin: auto 0;
		  }
		  .div-154 {
		    border-radius: 12px;
		    border-color: rgba(15, 23, 42, 0.1);
		    border-style: solid;
		    border-width: 1px;
		    background-color: rgba(255, 255, 255, 0.1);
		    display: flex;
		    margin-top: 12px;
		    gap: 20px;
		    font-size: 18px;
		    color: var(--Text, #0f172a);
		    font-weight: 500;
		    line-height: 150%;
		    padding: 28px 30px;
		  }
		  @media (max-width: 991px) {
		    .div-154 {
		      flex-wrap: wrap;
		      padding: 0 20px;
		    }
		  }
		  .div-155 {
		    font-family: Poppins, sans-serif;
		    flex: 1;
		  }
		  @media (max-width: 991px) {
		    .div-155 {
		      max-width: 100%;
		    }
		  }
		  .img-50 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 24px;
		    margin: auto 0;
		  }
		  .div-156 {
		    align-items: center;
		    border-radius: 24px;
		    background-color: var(--Main, #306cfe);
		    align-self: center;
		    display: flex;
		    margin-top: 129px;
		    width: 100%;
		    max-width: 1120px;
		    flex-direction: column;
		    color: var(--White, #fff);
		    font-weight: 400;
		    padding: 80px 20px;
		  }
		  @media (max-width: 991px) {
		    .div-156 {
		      max-width: 100%;
		      margin-top: 40px;
		    }
		  }
		  .div-157 {
		    align-self: stretch;
		    text-align: center;
		    font: 44px/120% Poppins, sans-serif;
		  }
		  @media (max-width: 991px) {
		    .div-157 {
		      max-width: 100%;
		    }
		  }
		  .div-158 {
		    text-align: center;
		    margin-top: 24px;
		    width: 580px;
		    font: 18px/31px Poppins, sans-serif;
		  }
		  @media (max-width: 991px) {
		    .div-158 {
		      max-width: 100%;
		    }
		  }
		  .div-159 {
		    justify-content: center;
		    border-radius: 40px;
		    background-color: var(--White, #fff);
		    margin-top: 40px;
		    color: var(--Main, #306cfe);
		    padding: 12px 24px;
		    font: 16px/170% Poppins, sans-serif;
		  }
		  @media (max-width: 991px) {
		    .div-159 {
		      padding: 0 20px;
		    }
		  }
		  .div-160 {
		    align-items: center;
		    background-color: var(--Text, #0f172a);
		    display: flex;
		    margin-top: 129px;
		    width: 100%;
		    justify-content: center;
		    padding: 80px 60px;
		  }
		  @media (max-width: 991px) {
		    .div-160 {
		      max-width: 100%;
		      margin-top: 40px;
		      padding: 0 20px;
		    }
		  }
		  .div-161 {
		    display: flex;
		    margin-top: 40px;
		    width: 100%;
		    max-width: 1120px;
		    flex-direction: column;
		  }
		  @media (max-width: 991px) {
		    .div-161 {
		      max-width: 100%;
		    }
		  }
		  .div-162 {
		    justify-content: space-between;
		  }
		  @media (max-width: 991px) {
		    .div-162 {
		      max-width: 100%;
		    }
		  }
		  .div-163 {
		    gap: 20px;
		    display: flex;
		  }
		  @media (max-width: 991px) {
		    .div-163 {
		      flex-direction: column;
		      align-items: stretch;
		      gap: 0px;
		    }
		  }
		  .column-17 {
		    display: flex;
		    flex-direction: column;
		    line-height: normal;
		    width: 50%;
		    margin-left: 0px;
		  }
		  @media (max-width: 991px) {
		    .column-17 {
		      width: 100%;
		    }
		  }
		  .div-164 {
		    align-items: start;
		    display: flex;
		    padding-right: 80px;
		    flex-direction: column;
		  }
		  @media (max-width: 991px) {
		    .div-164 {
		      max-width: 100%;
		    }
		  }
		  .img-51 {
		    aspect-ratio: 11.11;
		    object-fit: auto;
		    object-position: center;
		    width: 300px;
		    max-width: 100%;
		  }
		  .div-165 {
		    color: var(--White, #fff);
		    margin-top: 20px;
		    width: 330px;
		    font: 400 14px/24px Poppins, sans-serif;
		  }
		  .div-166 {
		    justify-content: end;
		    display: flex;
		    margin-top: 32px;
		    padding-right: 80px;
		    gap: 12px;
		  }
		  @media (max-width: 991px) {
		    .div-166 {
		      padding-right: 20px;
		    }
		  }
		  .img-52 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 24px;
		  }
		  .img-53 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 24px;
		  }
		  .img-54 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 24px;
		  }
		  .img-55 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 24px;
		  }
		  .column-18 {
		    display: flex;
		    flex-direction: column;
		    line-height: normal;
		    width: 50%;
		    margin-left: 20px;
		  }
		  @media (max-width: 991px) {
		    .column-18 {
		      width: 100%;
		    }
		  }
		  .div-167 {
		    align-items: end;
		    display: flex;
		    flex-grow: 1;
		    padding-left: 80px;
		    flex-direction: column;
		    font-size: 14px;
		    color: var(--White, #fff);
		    font-weight: 300;
		    line-height: 150%;
		  }
		  @media (max-width: 991px) {
		    .div-167 {
		      max-width: 100%;
		    }
		  }
		  .div-168 {
		    display: flex;
		    gap: 20px;
		    font-weight: 400;
		    justify-content: space-between;
		  }
		  .div-169 {
		    font-family: Poppins, sans-serif;
		  }
		  .div-170 {
		    font-family: Poppins, sans-serif;
		  }
		  .div-171 {
		    font-family: Poppins, sans-serif;
		  }
		  .div-172 {
		    font-family: Poppins, sans-serif;
		  }
		  .div-173 {
		    font-family: Poppins, sans-serif;
		  }
		  .div-174 {
		    display: flex;
		    margin-top: 44px;
		    gap: 8px;
		    white-space: nowrap;
		    margin-right: 105px;
		  }
		  @media (max-width: 991px) {
		    .div-174 {
		      margin-top: 40px;
		      white-space: initial;
		    }
		  }
		  .img-56 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 21px;
		  }
		  .div-175 {
		    font-family: Poppins, sans-serif;
		  }
		  .div-176 {
		    align-self: center;
		    display: flex;
		    margin-top: 16px;
		    gap: 8px;
		    margin-right: 27px;
		  }
		  .img-57 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 21px;
		  }
		  .div-177 {
		    font-family: Poppins, sans-serif;
		  }
		  .div-178 {
		    display: flex;
		    margin-top: 16px;
		    gap: 8px;
		  }
		  .img-58 {
		    aspect-ratio: 1;
		    object-fit: auto;
		    object-position: center;
		    width: 21px;
		  }
		  .div-179 {
		    font-family: Poppins, sans-serif;
		    flex: 1;
		  }
		  .div-180 {
		    padding-top: 43px;
		    justify-content: space-between;
		    align-items: start;
		    display: flex;
		    margin-top: 80px;
		    width: 100%;
		    gap: 20px;
		    font-size: 14px;
		    color: var(--White, #fff);
		    font-weight: 300;
		    line-height: 150%;
		  }
		  @media (max-width: 991px) {
		    .div-180 {
		      max-width: 100%;
		      flex-wrap: wrap;
		      margin-top: 40px;
		    }
		  }
		  .div-181 {
		    font-family: Poppins, sans-serif;
		  }
		  .div-182 {
		    display: flex;
		    gap: 20px;
		    justify-content: space-between;
		  }
		  .div-183 {
		    font-family: Poppins, sans-serif;
		  }
		  .div-184 {
		    font-family: Poppins, sans-serif;
		  }
		  .div-185 {
		    font-family: Poppins, sans-serif;
  		  }
	</style>
</head>
<body>
<div class="div">
	  <div class="div-2">
	    <div class="div-3">
	      <img
	        loading="lazy"
	        src="https://cdn.builder.io/api/v1/image/assets/TEMP/827db1cd5bd736b31252b06e6b582e1063739b880ce5f5e2bf01980a81334355?apiKey=2eca26ef55154ec69495e01044707395&"
	        class="img"
	      />
	      <div class="div-4">
	        <div class="div-5" style="background-color: transparent;">(406) 555-0120</div>
	        <img
	          loading="lazy"
	          src="https://cdn.builder.io/api/v1/image/assets/TEMP/2e4c9903d0fc60256eda1ceade3c15fec3b7117b51377d7d0acd68555ef182e0?apiKey=2eca26ef55154ec69495e01044707395&"
	          class="img-2"
	        />
	        <div class="div-6">Sign In</div>
	      </div>
	    </div>
	  </div>
	  <div class="div-7">
	    <div class="div-8">
	      <img
	        loading="lazy"
	        src="https://cdn.builder.io/api/v1/image/assets/TEMP/7667ed23632ca245f0ec36899d2f3da6fc4ffd587c4da87e1de61a68b6f5f470?apiKey=2eca26ef55154ec69495e01044707395&"
	        class="img-3"
	      />
	      <div class="div-9">
	        <div class="div-10">
	          Remove All Your Negative Google Reviews Instantly — No Preapproval
	          Needed
	        </div>

    <div class="form-container" style="margin-left: 0px;">
	        <h2 style="display:none;">Reputation Check:</h2>
	        <form id="reputationForm" action="review-reader-webform-v7.php" method="get" target="_top">
	            <div style="display:none;"> <!-- Verstecke das Google Place ID-Feld -->
	                <input type="text" id="googlePlaceId" name="googlePlaceId" placeholder="Google-Place ID" value="<?php echo htmlspecialchars($googlePlaceId); ?>">
	            </div>

	            <div class="separator" style="display:none;"><span>ODER:</span></div> <!-- Verstecke den Separator -->

	            <div class="row">
	                <!-- Behalte nur das Unternehmensname-Feld sichtbar -->
	                <div class="col" style="width: 100%;">
	                    <div class="div-form">
	                        <div class="div-form2" style="justify-content: space-between;">
	                            <div class="div-form3">
	                                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/ca3426b59a4bd270a0e281eb79acb68d87f7c8f166e62bed190bb388a40c3594?apiKey=2eca26ef55154ec69495e01044707395&" class="img-form" />
	                            </div>
	                            <div class="div-form4">
	                                <input type="text" id="businessName" name="businessName" placeholder="Name Ihres Unternehmens" class="styled-input">
	                            </div>
	                            <div class="div-form5" onclick="validateAndSubmit()">Absenden</div>
	                        </div>
	                    </div>
	                </div>
	            </div>

	            <!-- Verstecke die anderen Formularzeilen -->
	            <div class="row" style="display:none;">
	                <div class="col">
	                    <input type="text" id="street" name="street" placeholder="Straße und Hausnummer">
	                </div>
	            </div>

	            <div class="row" style="display:none;">
	                <div class="col">
	                    <input type="text" id="postalCode" name="postalCode" placeholder="PLZ">
	                </div>
	                <div class="col">
	                    <input type="text" id="city" name="city" placeholder="Stadt">
	                </div>
	            </div>

	            <div style="display:none;"> <!-- Verstecke das Land-Feld -->
	                <input type="text" id="country" name="country" placeholder="Land" value="Deutschland">
	            </div>
	        </form>
	    </div>

	    <!-- Versteckte Ergebnisse, die bei Bedarf angezeigt werden -->
	    <div id="results" class="form-container" style="display: none;">
	        <form id="reputationForm2" method="post">
	            <h2 style="display:none;">Folgendes Unternehmen wurde gefunden:</h2>
	            <div id="results-content" style="display:none;"></div>
	            <br><br>
	            <input type="hidden" id="hiddenCompanyData" name="companyData">
	            <!-- Der Bestätigungs-Button bleibt versteckt, bis er über JS sichtbar gemacht wird -->
	            <center><input type="button" id="confirm-button" class="confirm-btn" style="display: none;" onclick="confirmCompany()" value="Ja, ich möchte dieses Unternehmen für den Reputation Check verwenden"></center>
	        </form>
    </div>

	<!-- Versteckte Ergebnisse, die bei Bedarf angezeigt werden -->
    <div id="results" class="form-container" style="display: none;">
        <form id="reputationForm2" method="post">
	        <h2 style="display:none;">Folgendes Unternehmen wurde gefunden:</h2>
	        <div id="results-content" style="display:none;"></div>
	        <br><br>
	        <input type="hidden" id="hiddenCompanyData" name="companyData">
	        <!-- Der Bestätigungs-Button bleibt versteckt, bis er über JS sichtbar gemacht wird -->
	        <center><input type="button" id="confirm-button" class="confirm-btn" style="display: none;" onclick="confirmCompany()" value="Ja, ich möchte dieses Unternehmen für den Reputation Check verwenden"></center>
        </form>
    </div>



	        <div class="div-16">
	          <div class="div-17">Search Business</div>
	          <img
	            loading="lazy"
	            src="https://cdn.builder.io/api/v1/image/assets/TEMP/22901057dc730b7ad97304602e60ee889f8e22474986b565d7d31334cc534a62?apiKey=2eca26ef55154ec69495e01044707395&"
	            class="img-5"
	          />
	          <div class="div-18">Select Reviews</div>
	          <img
	            loading="lazy"
	            src="https://cdn.builder.io/api/v1/image/assets/TEMP/22901057dc730b7ad97304602e60ee889f8e22474986b565d7d31334cc534a62?apiKey=2eca26ef55154ec69495e01044707395&"
	            class="img-6"
	          />
	          <div class="div-19">Confirm Order</div>
	          <img
	            loading="lazy"
	            src="https://cdn.builder.io/api/v1/image/assets/TEMP/22901057dc730b7ad97304602e60ee889f8e22474986b565d7d31334cc534a62?apiKey=2eca26ef55154ec69495e01044707395&"
	            class="img-7"
	          />
	          <div class="div-20">Removal Request</div>
	        </div>
	        <img
	          loading="lazy"
	          src="https://cdn.builder.io/api/v1/image/assets/TEMP/6836c3fcfb07e5646a311a358ed37ed5a3d3be739988ed0833f370b6815fba5a?apiKey=2eca26ef55154ec69495e01044707395&"
	          class="img-8"
	        />
	      </div>
	    </div>
	    <div class="div-21">
	      <img
	        loading="lazy"
	        src="https://cdn.builder.io/api/v1/image/assets/TEMP/edd63a427012b337247266d839f700ecd40b823bff87315897c50d0fab1f622d?apiKey=2eca26ef55154ec69495e01044707395&"
	        class="img-9"
	      />
	    </div>
	  </div>
	  <div class="div-22">
	    <div class="div-23">
	      <div class="div-24">
	        <div class="column">
	          <div class="div-25">
	            <div class="div-26">
	              Our Main
	              <span style="color: rgba(48, 108, 254, 1)">Advantages</span>
	            </div>
	            <div class="div-27">
	              We only charge you a fair price of just €19.90 after successfully
	              removing the negative Google reviews
	            </div>
	          </div>
	        </div>
	        <div class="column-2">
	          <div class="div-28">
	            <div class="div-29">
	              <div class="div-30">
	                <img
	                  loading="lazy"
	                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/04c8a0f497dccd5fef09c7b9d7d6b7542ef56927bdc4d3418bd49db40a074fa1?apiKey=2eca26ef55154ec69495e01044707395&"
	                  class="img-10"
	                />
	                <div class="div-31">Risk-free and legal removal</div>
	              </div>
	              <div class="div-32">
	                <img
	                  loading="lazy"
	                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/04c8a0f497dccd5fef09c7b9d7d6b7542ef56927bdc4d3418bd49db40a074fa1?apiKey=2eca26ef55154ec69495e01044707395&"
	                  class="img-11"
	                />
	                <div class="div-33">95% removal success rate</div>
	              </div>
	            </div>
	            <div class="div-34">
	              <div class="div-35">
	                <img
	                  loading="lazy"
	                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/04c8a0f497dccd5fef09c7b9d7d6b7542ef56927bdc4d3418bd49db40a074fa1?apiKey=2eca26ef55154ec69495e01044707395&"
	                  class="img-12"
	                />
	                <div class="div-36">No legal advice needed</div>
	              </div>
	              <div class="div-37">
	                <img
	                  loading="lazy"
	                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/04c8a0f497dccd5fef09c7b9d7d6b7542ef56927bdc4d3418bd49db40a074fa1?apiKey=2eca26ef55154ec69495e01044707395&"
	                  class="img-13"
	                />
	                <div class="div-38">€19.90 per removal</div>
	              </div>
	            </div>
	            <div class="div-39">
	              <div class="div-40">
	                <img
	                  loading="lazy"
	                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/04c8a0f497dccd5fef09c7b9d7d6b7542ef56927bdc4d3418bd49db40a074fa1?apiKey=2eca26ef55154ec69495e01044707395&"
	                  class="img-14"
	                />
	                <div class="div-41">No upfront payment</div>
	              </div>
	              <div class="div-42">
	                <img
	                  loading="lazy"
	                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/04c8a0f497dccd5fef09c7b9d7d6b7542ef56927bdc4d3418bd49db40a074fa1?apiKey=2eca26ef55154ec69495e01044707395&"
	                  class="img-15"
	                />
	                <div class="div-43">Removal within 2 weeks</div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="div-44">
	    <img
	      loading="lazy"
	      src="https://cdn.builder.io/api/v1/image/assets/TEMP/8b02a562692e3ab2bbf07e379a72537c7b7db4500cab12646cee6f37136d932c?apiKey=2eca26ef55154ec69495e01044707395&"
	      class="img-16"
	    />
	    <img
	      loading="lazy"
	      src="https://cdn.builder.io/api/v1/image/assets/TEMP/74836cab9411f3162a939c26b9b27e9ff01c506d6094732e59eea63bc54a2c30?apiKey=2eca26ef55154ec69495e01044707395&"
	      class="img-17"
	    />
	    <img
	      loading="lazy"
	      src="https://cdn.builder.io/api/v1/image/assets/TEMP/9c3c1e85184b1f3bf1058fdf7a8151c53c6238c5cd4705a9d1429f36c39e0b11?apiKey=2eca26ef55154ec69495e01044707395&"
	      class="img-18"
	    />
	    <img
	      loading="lazy"
	      src="https://cdn.builder.io/api/v1/image/assets/TEMP/74836cab9411f3162a939c26b9b27e9ff01c506d6094732e59eea63bc54a2c30?apiKey=2eca26ef55154ec69495e01044707395&"
	      class="img-19"
	    />
	    <img
	      loading="lazy"
	      src="https://cdn.builder.io/api/v1/image/assets/TEMP/e4303df4d15b1a5b44ebf2f51e01180b8927583e3ef59312b36c98554033e63d?apiKey=2eca26ef55154ec69495e01044707395&"
	      class="img-20"
	    />
	    <img
	      loading="lazy"
	      src="https://cdn.builder.io/api/v1/image/assets/TEMP/74836cab9411f3162a939c26b9b27e9ff01c506d6094732e59eea63bc54a2c30?apiKey=2eca26ef55154ec69495e01044707395&"
	      class="img-21"
	    />
	    <img
	      loading="lazy"
	      src="https://cdn.builder.io/api/v1/image/assets/TEMP/1021592468be8cd97b27829e3bb1cce933adc2069a73203dbc4c208b5b0578bb?apiKey=2eca26ef55154ec69495e01044707395&"
	      class="img-22"
	    />
	    <img
	      loading="lazy"
	      src="https://cdn.builder.io/api/v1/image/assets/TEMP/2e3d2af262e0480811484a675aff4eb069551a0fc57bc3a2950a97c3e6290e72?apiKey=2eca26ef55154ec69495e01044707395&"
	      class="img-23"
	    />
	    <img
	      loading="lazy"
	      src="https://cdn.builder.io/api/v1/image/assets/TEMP/8eb82d9f5496de0ff64ff6815c5860051d8a0dbb66f49d9d1becee871a3e8ada?apiKey=2eca26ef55154ec69495e01044707395&"
	      class="img-24"
	    />
	    <img
	      loading="lazy"
	      src="https://cdn.builder.io/api/v1/image/assets/TEMP/4ff5e5d42eb848ff36ae5181331f53d95b98b59d77eac175de723c337029ca94?apiKey=2eca26ef55154ec69495e01044707395&"
	      class="img-25"
	    />
	    <img
	      loading="lazy"
	      src="https://cdn.builder.io/api/v1/image/assets/TEMP/894891e0c69c59d01f6187c365f5e29a899ac90da980627911354d0ae7e86b0b?apiKey=2eca26ef55154ec69495e01044707395&"
	      class="img-26"
	    />
	    <img
	      loading="lazy"
	      src="https://cdn.builder.io/api/v1/image/assets/TEMP/4ff5e5d42eb848ff36ae5181331f53d95b98b59d77eac175de723c337029ca94?apiKey=2eca26ef55154ec69495e01044707395&"
	      class="img-27"
	    />
	    <img
	      loading="lazy"
	      src="https://cdn.builder.io/api/v1/image/assets/TEMP/b57f0d59129e7b27c0a07ebf10aaa36e9d8de7e500a9215bd1741629748adf34?apiKey=2eca26ef55154ec69495e01044707395&"
	      class="img-28"
	    />
	    <img
	      loading="lazy"
	      src="https://cdn.builder.io/api/v1/image/assets/TEMP/4ff5e5d42eb848ff36ae5181331f53d95b98b59d77eac175de723c337029ca94?apiKey=2eca26ef55154ec69495e01044707395&"
	      class="img-29"
	    />
	    <img
	      loading="lazy"
	      src="https://cdn.builder.io/api/v1/image/assets/TEMP/39edef8326938785f122d5fcb32e22c1020d0717e3efeb9f1976413b1ffe339f?apiKey=2eca26ef55154ec69495e01044707395&"
	      class="img-30"
	    />
	  </div>
	  <div class="div-45">
	    <div class="div-46">
	      <div class="div-47">
	        <div class="div-48">
	          <div class="div-49">
	            <span style="color: rgba(48, 108, 254, 1)">Results</span>
	            of Our Work
	          </div>
	          <div class="div-50">
	            What you can expect by cooperating with us, what you will get.
	          </div>
	        </div>
	        <div class="div-51">View more</div>
	      </div>
	      <div class="div-52">
	        <div class="div-53">
	          <div class="column-3">
	            <div class="div-54">
	              <div class="div-55">
	                <div class="div-56">
	                  <div class="column-4">
	                    <div class="div-57">
	                      <div class="div-58">Before</div>
	                      <div class="div-59">
	                        <img
	                          loading="lazy"
	                          srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/2cee8d2f356e2ce156fe393e63d3548914fd9d6b0dbc0333f9e0b4fcfdb8dc1c?apiKey=2eca26ef55154ec69495e01044707395&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/2cee8d2f356e2ce156fe393e63d3548914fd9d6b0dbc0333f9e0b4fcfdb8dc1c?apiKey=2eca26ef55154ec69495e01044707395&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/2cee8d2f356e2ce156fe393e63d3548914fd9d6b0dbc0333f9e0b4fcfdb8dc1c?apiKey=2eca26ef55154ec69495e01044707395&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/2cee8d2f356e2ce156fe393e63d3548914fd9d6b0dbc0333f9e0b4fcfdb8dc1c?apiKey=2eca26ef55154ec69495e01044707395&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/2cee8d2f356e2ce156fe393e63d3548914fd9d6b0dbc0333f9e0b4fcfdb8dc1c?apiKey=2eca26ef55154ec69495e01044707395&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/2cee8d2f356e2ce156fe393e63d3548914fd9d6b0dbc0333f9e0b4fcfdb8dc1c?apiKey=2eca26ef55154ec69495e01044707395&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/2cee8d2f356e2ce156fe393e63d3548914fd9d6b0dbc0333f9e0b4fcfdb8dc1c?apiKey=2eca26ef55154ec69495e01044707395&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/2cee8d2f356e2ce156fe393e63d3548914fd9d6b0dbc0333f9e0b4fcfdb8dc1c?apiKey=2eca26ef55154ec69495e01044707395&"
	                          class="img-31"
	                        />
	                        <div class="div-60">
	                          <div class="div-61">Domino's Pizza Aschersleben</div>
	                          <div class="div-62">
	                            <img
	                              loading="lazy"
	                              src="https://cdn.builder.io/api/v1/image/assets/TEMP/3fe2221448032b36efbd60b5717ebc413b893f3c057ecaf03f691a113d376341?apiKey=2eca26ef55154ec69495e01044707395&"
	                              class="img-32"
	                            />
	                            <div class="div-63">(23 921)</div>
	                          </div>
	                        </div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="column-5">
	                    <img
	                      loading="lazy"
	                      src="https://cdn.builder.io/api/v1/image/assets/TEMP/61aac3115b4fa2e3621075d822e24b7bcfafdb434c337e95bdc04bf74c7a6242?apiKey=2eca26ef55154ec69495e01044707395&"
	                      class="img-33"
	                    />
	                  </div>
	                </div>
	              </div>
	              <div class="div-64">
	                <div class="div-65">After</div>
	                <div class="div-66">
	                  <img
	                    loading="lazy"
	                    srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/2cee8d2f356e2ce156fe393e63d3548914fd9d6b0dbc0333f9e0b4fcfdb8dc1c?apiKey=2eca26ef55154ec69495e01044707395&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/2cee8d2f356e2ce156fe393e63d3548914fd9d6b0dbc0333f9e0b4fcfdb8dc1c?apiKey=2eca26ef55154ec69495e01044707395&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/2cee8d2f356e2ce156fe393e63d3548914fd9d6b0dbc0333f9e0b4fcfdb8dc1c?apiKey=2eca26ef55154ec69495e01044707395&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/2cee8d2f356e2ce156fe393e63d3548914fd9d6b0dbc0333f9e0b4fcfdb8dc1c?apiKey=2eca26ef55154ec69495e01044707395&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/2cee8d2f356e2ce156fe393e63d3548914fd9d6b0dbc0333f9e0b4fcfdb8dc1c?apiKey=2eca26ef55154ec69495e01044707395&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/2cee8d2f356e2ce156fe393e63d3548914fd9d6b0dbc0333f9e0b4fcfdb8dc1c?apiKey=2eca26ef55154ec69495e01044707395&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/2cee8d2f356e2ce156fe393e63d3548914fd9d6b0dbc0333f9e0b4fcfdb8dc1c?apiKey=2eca26ef55154ec69495e01044707395&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/2cee8d2f356e2ce156fe393e63d3548914fd9d6b0dbc0333f9e0b4fcfdb8dc1c?apiKey=2eca26ef55154ec69495e01044707395&"
	                    class="img-34"
	                  />
	                  <div class="div-67">
	                    <div class="div-68">Domino's Pizza Aschersleben</div>
	                    <div class="div-69">
	                      <img
	                        loading="lazy"
	                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/c81a76caec0f1e5394d4bd9b4d873ffede03eef8eafa3603d1a8fb286d941ed5?apiKey=2eca26ef55154ec69495e01044707395&"
	                        class="img-35"
	                      />
	                      <div class="div-70">(18 712)</div>
	                    </div>
	                  </div>
	                </div>
	              </div>
	              <div class="div-71">
	                <div class="div-72">
	                  <img
	                    loading="lazy"
	                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/ad0deb33d4f7135c6b5ce4bfefbf4e44e1b0d33d5eccc183a4fc820eacb76523?apiKey=2eca26ef55154ec69495e01044707395&"
	                    class="img-36"
	                  />
	                </div>
	                <div class="div-73">Play video</div>
	              </div>
	              <div class="div-74">
	                This business had a very bad reputation until we were ordered to
	                remove the negative reviews.
	              </div>
	            </div>
	          </div>
	          <div class="column-6">
	            <div class="div-75">
	              <div class="div-76">
	                Make your business
	                <br />
	                more relevant
	              </div>
	              <div class="div-77">
	                After removing negative reviews, your business will start a new
	                life and a new story that will be more profitable.
	              </div>
	              <img
	                loading="lazy"
	                srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/456447c4-cd23-453e-8f20-113ef9447592?apiKey=2eca26ef55154ec69495e01044707395&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/456447c4-cd23-453e-8f20-113ef9447592?apiKey=2eca26ef55154ec69495e01044707395&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/456447c4-cd23-453e-8f20-113ef9447592?apiKey=2eca26ef55154ec69495e01044707395&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/456447c4-cd23-453e-8f20-113ef9447592?apiKey=2eca26ef55154ec69495e01044707395&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/456447c4-cd23-453e-8f20-113ef9447592?apiKey=2eca26ef55154ec69495e01044707395&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/456447c4-cd23-453e-8f20-113ef9447592?apiKey=2eca26ef55154ec69495e01044707395&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/456447c4-cd23-453e-8f20-113ef9447592?apiKey=2eca26ef55154ec69495e01044707395&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/456447c4-cd23-453e-8f20-113ef9447592?apiKey=2eca26ef55154ec69495e01044707395&"
	                class="img-37"
	              />
	            </div>
	          </div>
	        </div>
	      </div>
	      <div class="div-78">
	        <div class="div-79">
	          <div class="column-7">
	            <div class="div-80">
	              <div class="div-81"></div>
	              <div class="div-82">01</div>
	              <div class="div-83">Case Study 1</div>
	              <div class="div-84">
	                Appeal from a cafe in Germany, 200 reviews have been removed.
	              </div>
	            </div>
	          </div>
	          <div class="column-8">
	            <div class="div-85">
	              <div class="div-86"><div class="div-87"></div></div>
	              <div class="div-88">02</div>
	              <div class="div-89">Case Study 2</div>
	              <div class="div-90">
	                Removal of more than 1000 reviews, and a success rate of 80%.
	              </div>
	            </div>
	          </div>
	          <div class="column-9">
	            <div class="div-91">
	              <div class="div-92"></div>
	              <div class="div-93">03</div>
	              <div class="div-94">Case Study 3</div>
	              <div class="div-95">
	                Change of business in just 1 day, success rate 100%.
	              </div>
	            </div>
	          </div>
	          <div class="column-10">
	            <div class="div-96">
	              <div class="div-97"></div>
	              <div class="div-98">04</div>
	              <div class="div-99">Case Study 4</div>
	              <div class="div-100">
	                Quick removal, 500 negative reviews in 6 hours.
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	      <div class="div-101">
	        <div class="div-102">
	          <img
	            loading="lazy"
	            src="https://cdn.builder.io/api/v1/image/assets/TEMP/0308af5bdb9427425c750b1f4dfa792c86b4b7c4eb341a94110abaaafe8989a9?apiKey=2eca26ef55154ec69495e01044707395&"
	            class="img-38"
	          />
	        </div>
	        <div class="div-103">
	          <img
	            loading="lazy"
	            src="https://cdn.builder.io/api/v1/image/assets/TEMP/7a8ffb503b75ef3bc91fe93222f3239cc26e7ac6fb5d3a6fa5cd0c81fc9cbb9a?apiKey=2eca26ef55154ec69495e01044707395&"
	            class="img-39"
	          />
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="div-104">
	    <img
	      loading="lazy"
	      srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/ab53a48c-deb0-4c57-b7f7-6cfb4e81633c?apiKey=2eca26ef55154ec69495e01044707395&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/ab53a48c-deb0-4c57-b7f7-6cfb4e81633c?apiKey=2eca26ef55154ec69495e01044707395&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/ab53a48c-deb0-4c57-b7f7-6cfb4e81633c?apiKey=2eca26ef55154ec69495e01044707395&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/ab53a48c-deb0-4c57-b7f7-6cfb4e81633c?apiKey=2eca26ef55154ec69495e01044707395&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/ab53a48c-deb0-4c57-b7f7-6cfb4e81633c?apiKey=2eca26ef55154ec69495e01044707395&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/ab53a48c-deb0-4c57-b7f7-6cfb4e81633c?apiKey=2eca26ef55154ec69495e01044707395&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/ab53a48c-deb0-4c57-b7f7-6cfb4e81633c?apiKey=2eca26ef55154ec69495e01044707395&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/ab53a48c-deb0-4c57-b7f7-6cfb4e81633c?apiKey=2eca26ef55154ec69495e01044707395&"
	      class="img-40"
	    />
	  </div>
	  <div class="div-105">Remove negative reviews</div>
	  <div class="div-106">
	    <div class="div-107">
	      <div class="div-108">
	        <div class="column-11">
	          <div class="div-109">
	            <div class="div-110">
	              <div class="div-111">
	                  <div class="column-12">
	                    <div class="div-113">
	                      <div class="div-114">How is payment made?</div>
	                      <div class="div-115">
	                        At what stage will you pay for your deleted negative
	                        reviews.
	                      </div>
	                    </div>
	                  </div>
	              </div>
	              <div class="div-117">Placing an order</div>
	              <img
	                loading="lazy"
	                src="https://cdn.builder.io/api/v1/image/assets/TEMP/7edd459a904bae01b1bd2fcff008013c6998c19824a0960c0074c17a8c780b97?apiKey=2eca26ef55154ec69495e01044707395&"
	                class="img-41"
	              />
	              <div class="div-118">Removal of negative reviews</div>
	              <img
	                loading="lazy"
	                src="https://cdn.builder.io/api/v1/image/assets/TEMP/bc1dbdbd2dfa5d222803ad5856f8606531e67a3e6a3df97b5ebed02d6561fd24?apiKey=2eca26ef55154ec69495e01044707395&"
	                class="img-42"
	              />
	              <div class="div-119">Payment for your order</div>
	            </div>
	          </div>
	        </div>
	        <div class="column-14">
	          <div class="div-120">
	            <div class="div-121">
	              <span style="color: rgba(48, 108, 254, 1)">No</span>
	              Upfront Payment
	            </div>
	            <div class="div-122">
	              We understand and ask you to make payment only after successful
	              removal of negative reviews. Without any risks for you, we
	              guarantee complete safety!
	            </div>
	            <div class="div-123"><div class="div-124"></div></div>
	            <div class="div-125">
	              <div class="div-126">
	                <div class="column-15">
	                  <div class="div-127">
	                    <div class="div-128">
	                      <div class="div-129">
	                        <img
	                          loading="lazy"
	                          src="https://cdn.builder.io/api/v1/image/assets/TEMP/8ee016383b78a04eb1edf64c71c3065dbcae9dd2f7d54c71a51162588e715d81?apiKey=2eca26ef55154ec69495e01044707395&"
	                          class="img-43"
	                        />
	                      </div>
	                    </div>
	                    <div class="div-130">Financial Security</div>
	                    <div class="div-131">
	                      Without any prepayments, only after deletion.
	                    </div>
	                  </div>
	                </div>
	                <div class="column-16">
	                  <div class="div-132">
	                    <div class="div-133">
	                      <div class="div-134">
	                        <img
	                          loading="lazy"
	                          src="https://cdn.builder.io/api/v1/image/assets/TEMP/cb022e9ad7c058c3be4fbad653920e659601890cf3f51326b0cbb4bace960a1e?apiKey=2eca26ef55154ec69495e01044707395&"
	                          class="img-44"
	                        />
	                      </div>
	                    </div>
	                    <div class="div-135">No Risks</div>
	                    <div class="div-136">
	                      Removal only through legal assistance.
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>
	            <div class="div-137">Remove negative reviews</div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="div-138">
	    <div class="div-139">
	      <div class="div-140">
	        Answers to
	        <span style="color: rgba(48, 108, 254, 1)">Questions</span>
	      </div>
	      <div class="div-141">
	        Frequently asked questions and their answers. In any case, you can
	        contact the support service.
	      </div>
	      <div class="div-142">
	        <div class="div-143">Can you remove any negative Review?</div>
	        <img
	          loading="lazy"
	          src="https://cdn.builder.io/api/v1/image/assets/TEMP/8ffb15a25df40d4ab8a747802cb07af0688a69bf5a2ec4b9477abdc9424d5ad6?apiKey=2eca26ef55154ec69495e01044707395&"
	          class="img-45"
	        />
	      </div>
	      <div class="div-144">
	        <div class="div-145">
	          <div class="div-146">Is it Google Conform?</div>
	          <img
	            loading="lazy"
	            src="https://cdn.builder.io/api/v1/image/assets/TEMP/c57150f288005c21b2220febeca7838d6d66808b32847d8592868f8ed8080352?apiKey=2eca26ef55154ec69495e01044707395&"
	            class="img-46"
	          />
	        </div>
	        <div class="div-147">
	          Yes alle löschantrge gehen über rechtsanwalt hundeshagen der die
	          anträge bei google abgibt. Es gibt kein Risiko dabei.
	        </div>
	      </div>
	      <div class="div-148">
	        <div class="div-149">How long does the Removal take?</div>
	        <img
	          loading="lazy"
	          src="https://cdn.builder.io/api/v1/image/assets/TEMP/8ffb15a25df40d4ab8a747802cb07af0688a69bf5a2ec4b9477abdc9424d5ad6?apiKey=2eca26ef55154ec69495e01044707395&"
	          class="img-47"
	        />
	      </div>
	      <div class="div-150">
	        <div class="div-151">When are you applying the Removal?</div>
	        <img
	          loading="lazy"
	          src="https://cdn.builder.io/api/v1/image/assets/TEMP/8ffb15a25df40d4ab8a747802cb07af0688a69bf5a2ec4b9477abdc9424d5ad6?apiKey=2eca26ef55154ec69495e01044707395&"
	          class="img-48"
	        />
	      </div>
	      <div class="div-152">
	        <div class="div-153">Wird mir etwas als Vorkasse abgebucht?</div>
	        <img
	          loading="lazy"
	          src="https://cdn.builder.io/api/v1/image/assets/TEMP/8ffb15a25df40d4ab8a747802cb07af0688a69bf5a2ec4b9477abdc9424d5ad6?apiKey=2eca26ef55154ec69495e01044707395&"
	          class="img-49"
	        />
	      </div>
	      <div class="div-154">
	        <div class="div-155">Wie sicher seid ihr dabei?</div>
	        <img
	          loading="lazy"
	          src="https://cdn.builder.io/api/v1/image/assets/TEMP/8ffb15a25df40d4ab8a747802cb07af0688a69bf5a2ec4b9477abdc9424d5ad6?apiKey=2eca26ef55154ec69495e01044707395&"
	          class="img-50"
	        />
	      </div>
	    </div>
	  </div>
	  <div class="div-156">
	    <div class="div-157">Still Have Questions?</div>
	    <div class="div-158">
	      Drop us a line in our live chat, and we'll answer you in less than a
	      minute, even on weekends!
	    </div>
	    <div class="div-159">Open chat</div>
	  </div>
	  <div class="div-160">
	    <div class="div-161">
	      <div class="div-162">
	        <div class="div-163">
	          <div class="column-17">
	            <div class="div-164">
	              <img
	                loading="lazy"
	                src="https://cdn.builder.io/api/v1/image/assets/TEMP/b431fa5991a2a568827001d9fba8cb1d893521c85681610dd6d54eb01df658c5?apiKey=2eca26ef55154ec69495e01044707395&"
	                class="img-51"
	              />
	              <div class="div-165">
	                After removing negative reviews, your business will start a new
	                life and a new story that will be
	              </div>
	              <div class="div-166">
	                <img
	                  loading="lazy"
	                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/dac725e8532b83265546eb7e6793c91e29753797edbc842ec89703642d8cfdff?apiKey=2eca26ef55154ec69495e01044707395&"
	                  class="img-52"
	                />
	                <img
	                  loading="lazy"
	                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/13d91c4876731a6790c60c0380724d5dc290f52686f0ba713e09fafb00d10df7?apiKey=2eca26ef55154ec69495e01044707395&"
	                  class="img-53"
	                />
	                <img
	                  loading="lazy"
	                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/48adc014120e37f689bdc0a7f59830845c1a093eeed574ae272cf59be39760cd?apiKey=2eca26ef55154ec69495e01044707395&"
	                  class="img-54"
	                />
	                <img
	                  loading="lazy"
	                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/d65219e8f7defeb67ed4e5091d91244094bc22440d74d24b81f921ac60f8a852?apiKey=2eca26ef55154ec69495e01044707395&"
	                  class="img-55"
	                />
	              </div>
	            </div>
	          </div>
	          <div class="column-18">
	            <div class="div-167">
	              <div class="div-168">
	                <div class="div-169">Home</div>
	                <div class="div-170">Blog</div>
	                <div class="div-171">FAQ</div>
	                <div class="div-172">Jobs</div>
	                <div class="div-173">Sign In</div>
	              </div>
	              <div class="div-174">
	                <img
	                  loading="lazy"
	                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/96966cf0aa5b2e66be0d8bb37216427b312bc9faa79097ee1456b73a360f23e4?apiKey=2eca26ef55154ec69495e01044707395&"
	                  class="img-56"
	                />
	                <div class="div-175">tim.jennings@example.com</div>
	              </div>
	              <div class="div-176">
	                <img
	                  loading="lazy"
	                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/4375a135cf9b24abe7b222ebd5235af79b8c4c04cc6609fa7add14d7f14c913d?apiKey=2eca26ef55154ec69495e01044707395&"
	                  class="img-57"
	                />
	                <div class="div-177">(405) 555-0128</div>
	              </div>
	              <div class="div-178">
	                <img
	                  loading="lazy"
	                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/b241da61e1c17ac9ed618c554a6c602d13bf35e2da13467a9d96e00ee3a23e4a?apiKey=2eca26ef55154ec69495e01044707395&"
	                  class="img-58"
	                />
	                <div class="div-179">
	                  3517 W. Gray St. Utica, Pennsylvania 57867
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	      <div class="div-180">
	        <div class="div-181">2024 Bewertungsreiniger. All right reserved.</div>
	        <div class="div-182">
	          <div class="div-183">Legal Notices</div>
	          <div class="div-184">Terms of Service</div>
	          <div class="div-185">Cookie Settings</div>
	        </div>
	      </div>
	    </div>
	  </div>
</div>
</body>
</html>